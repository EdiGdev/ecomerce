<?php

namespace App\Http\Livewire;

use App\Mail\Order\OrderCreate;
use App\Mail\Order\OrderCreate_admin;
use App\Models\Address;
use App\Models\City;
use App\Models\Department;
use App\Models\District;
use App\Models\Order;
use App\Models\Tienda;
use App\Models\User;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

use function App\discount;

class CreateOrder extends Component
{
    public $departments, $cities = [], $districts = [];
    public $department_id = '', $city_id = '', $district_id = '';
    public $address, $reference;
    public $envio_type = 2; //que clase de envio es , tienda=1 , envio a domicilio = 2
    public $contact, $phone,  $shipping_cost = 0;
    public $tienda = null;
    public $user = null;
    public $rules = [
        'contact' => 'required',
        'phone' => 'required',
        'envio_type' => 'required'
    ];

    public function create_order()
    {
        $rules = $this->rules;
        if ($this->envio_type == 2) {
            $rules['department_id'] = 'required';
            $rules['city_id'] = 'required';
            $rules['district_id'] = 'required';
            $rules['address'] = 'required';
            $rules['reference'] = 'required';
        }
        $this->validate($rules);

        $order = new Order();
        $order->user_id = auth()->user()->id;
        $order->contact = $this->contact;
        $order->phone = $this->phone;
        $order->envio_type = $this->envio_type;

        if ($this->envio_type == 2) {
            $order->shipping_cost = $this->shipping_cost;
            $order->envio = json_encode([
                'department' => Department::find($this->department_id)->name,
                'city' => City::find($this->city_id)->name,
                'district' => District::find($this->district_id)->name,
                'address' => $this->address,
                'reference' => $this->reference
            ]);

            // Convierte el valor a un formato numérico válido eliminando comas
            $totalValue = str_replace(',', '', $this->shipping_cost);
            $subtotal = str_replace(',', '', Cart::subtotal());
            $order->total = (float)$totalValue +  $subtotal;
        } else {
            $order->shipping_cost = 0;

            // Convierte el valor a un formato numérico válido eliminando comas
            $totalValue = str_replace(',', '', Cart::subtotal());
            $order->total = (float)$totalValue;
        }

        $order->content = Cart::content();

        $order->save();

        foreach (Cart::content() as $item) {
            discount($item);
        }

        Cart::destroy();

        $userActual = auth()->user();
        $userActual->phone = $this->phone;

        $order->save(); 

        $tienda = Tienda::first();
        $order = Order::find($order->id);
        //------------------------------------------------------------------------------
        // Enviar correo electrónico a administradores
        $admins = User::whereHas('roles', function ($query) {
            $query->where('name', 'admin');
        })->get();

        foreach ($admins as $admin) {
            Mail::to($admin->email)->send(new OrderCreate_admin($order));
        }

        // Enviar correo electrónico al usuario
        Mail::to($userActual->email)->send(new OrderCreate($order));


        return redirect()->route('orders.payment', $order);
    }

    public function mount()
    {

        $this->tienda = Tienda::first();
        $this->departments = Department::orderBy('id', 'desc')->get();

        if (auth()->check()) {
            $this->contact = auth()->user()->name;
            $this->phone = auth()->user()->phone;
            $existingAddress = Address::where('user_id', auth()->id())->first();
            $this->user = auth()->user();
            if ($existingAddress) {
                $this->department_id = $existingAddress->department_id;
                $this->loadCities();
                $this->city_id = $existingAddress->city_id;
                $this->loadDistricts();
                $this->district_id = $existingAddress->district_id;
                $this->address = $existingAddress->address;
                $this->reference = $existingAddress->reference;
                $this->updatedCityIdX2($this->city_id);
            }
        }
    }

    public function updatedEnvioType($value)
    {
        if ($value == 1) {
            $this->resetValidation([
                'department_id',
                'city_id',
                'district_id',
                'address',
                'reference',
            ]);
        }
    }

    // Al seleccionar una ciudad se deben cargar
    //los distritos asociados.
    public function updatedDepartmentId($value)
    {
        $this->cities = City::where('department_id', $value)->get();
        $this->reset([
            'city_id',
            'district_id'
        ]);
    }
    public function updatedCityId($value)
    {
        $city = City::find($value);
        $this->shipping_cost = $city->cost;

        $this->districts = District::where('city_id', $value)->get();
        $this->reset('district_id');
    }

    public function updatedCityIdX2($value)
    {
        $city = City::find($value);
        $this->shipping_cost = $city->cost;

        $this->districts = District::where('city_id', $value)->get();
       // $this->reset('district_id');
    }
    protected function loadCities()
    {
        $this->cities = City::where('department_id', $this->department_id)->get();
        $this->reset(['city_id', 'district_id']);
        $this->emit('reinitializeSelect2');
    }

    protected function loadDistricts()
    {
        $this->districts = District::where('city_id', $this->city_id)->get();
        $this->reset('district_id');
        $this->emit('reinitializeSelect2');
    }


    public function render()
    {
        return view('livewire.create-order');
    }
}
