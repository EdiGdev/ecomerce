<?php

namespace App\Http\Livewire;

use App\Models\Address;
use App\Models\City;
use App\Models\Department;
use App\Models\District;
use Illuminate\Support\Facades\Cache;
use Livewire\Component;

class AddressComponent extends Component
{
    public $departments, $cities = [], $districts = [];
    public $department_id = '', $city_id = '', $district_id = '';
    public $address, $reference;
    public $contact, $phone, $shipping_cost = 0;
    public $envioType = 1;
    public $addresses;
    public $isModalOpen = false;

    protected $rules = [
        'department_id' => 'required',
        'city_id' => 'required',
        'district_id' => 'required',
        'address' => 'required',
        'reference' => 'required',
    ];
    
    protected $listeners = ['openAddressModal' => 'openModal'];

    public function mount()
    {
        $this->departments = Department::orderBy('id', 'desc')->get();

        // Verificar si el usuario está autenticado
        if (auth()->check()) {
            $existingAddress = Address::where('user_id', auth()->id())->first();

            if ($existingAddress) {
                $this->department_id = $existingAddress->department_id;
                $this->loadCities();
                $this->city_id = $existingAddress->city_id;
                $this->loadDistricts();
                $this->district_id = $existingAddress->district_id;
                $this->address = $existingAddress->address;
                $this->reference = $existingAddress->reference;
            }
        } else {
            // Si el usuario no está autenticado, intenta cargar desde caché
            $cacheKey = 'user_address_' . md5(request()->ip());

            if (Cache::has($cacheKey)) {
                $cachedAddress = Cache::get($cacheKey);

                $this->department_id = $cachedAddress['department_id'];
                $this->loadCities();
                $this->city_id = $cachedAddress['city_id'];
                $this->loadDistricts();
                $this->district_id = $cachedAddress['district_id'];
                $this->address = $cachedAddress['address'];
                $this->reference = $cachedAddress['reference'];
            }
        }
    }

    public function updatedEnvioType($value)
    {
        $this->resetValidation([
            'department_id',
            'city_id',
            'district_id',
            'address',
            'reference',
        ]);
    }

    public function updatedDepartmentId($value)
    {
        $this->loadCities();
        $this->emit('reinitializeSelect2');
    }

    public function updatedCityId($value)
    {
        $this->loadDistricts();
        $city = City::find($value);
        $this->shipping_cost = $city->cost;

        $this->reset('district_id');
        $this->emit('reinitializeSelect2');
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

    public function saveAddress()
    {
        $this->validate();

        if (auth()->check()) {
            $existingAddress = Address::where('user_id', auth()->id())->first();

            if ($existingAddress) {
                $existingAddress->update([
                    'department_id' => $this->department_id,
                    'city_id' => $this->city_id,
                    'district_id' => $this->district_id,
                    'address' => $this->address,
                    'reference' => $this->reference,
                ]);
            } else {
                Address::create([
                    'user_id' => auth()->id(),
                    'department_id' => $this->department_id,
                    'city_id' => $this->city_id,
                    'district_id' => $this->district_id,
                    'address' => $this->address,
                    'reference' => $this->reference,
                ]);
            }
        } else {
            $cacheKey = 'user_address_' . md5(request()->ip());
            $cachedAddress = [
                'department_id' => $this->department_id,
                'city_id' => $this->city_id,
                'district_id' => $this->district_id,
                'address' => $this->address,
                'reference' => $this->reference,
            ];

            Cache::put($cacheKey, $cachedAddress, now()->addMinutes(30));
        }

        $this->reset([
            'department_id',
            'city_id',
            'district_id',
            'address',
            'reference',
        ]);

        $this->addresses = Address::where('user_id', auth()->id())->get();

        $this->closeModal();

        $this->mount();
    }

    public function openModal()
    {
        $this->isModalOpen = true;
    }

    public function closeModal()
    {
        $this->isModalOpen = false;
    }

    public function render()
    {
        return view('livewire.address-component');
    }
}
