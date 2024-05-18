<?php

namespace Database\Seeders;

use App\Models\City;
use App\Models\Department;
use App\Models\District;
use Illuminate\Database\Seeder;



class DepartmentSeeder extends Seeder
{
    public function run()
    {
        $parroquias = [
            [
                "provincia" => "AZUAY",
                "cantones" => [
                    [
                        "canton" => "CUENCA",
                        "parroquias" => [
                            "BELLAVISTA",
                            "CAÑARIBAMBA",
                            "EL BATÁN",
                            "EL SAGRARIO",
                            "EL VECINO",
                            "GIL RAMÍREZ DÁVALOS",
                            "HUAYNACÁPAC",
                            "MACHÁNGARA",
                            "MONAY",
                            "SAN BLAS",
                            "SAN SEBASTIÁN",
                            "SUCRE",
                            "TOTORACOCHA",
                            "YANUNCAY",
                            "HERMANO MIGUEL",
                            "CUENCA",
                            "BAÑOS",
                            "CUMBE",
                            "CHAUCHA",
                            "CHECA (JIDCAY)",
                            "CHIQUINTAD",
                            "LLACAO",
                            "MOLLETURO",
                            "NULTI",
                            "OCTAVIO CORDERO PALACIOS (SANTA ROSA)",
                            "PACCHA",
                            "QUINGEO",
                            "RICAURTE",
                            "SAN JOAQUÍN",
                            "SANTA ANA",
                            "SAYAUSÍ",
                            "SIDCAY",
                            "SININCAY",
                            "TARQUI",
                            "TURI",
                            "VALLE",
                            "VICTORIA DEL PORTETE (IRQUIS)"
                        ]
                    ],
                    [
                        "canton" => "GIRÓN",
                        "parroquias" => [
                            "GIRÓN",
                            "ASUNCIÓN",
                            "SAN GERARDO"
                        ]
                    ],
                    [
                        "canton" => "GUALACEO",
                        "parroquias" => [
                            "GUALACEO",
                            "CHORDELEG",
                            "DANIEL CÓRDOVA TORAL (EL ORIENTE)",
                            "JADÁN",
                            "MARIANO MORENO",
                            "PRINCIPAL",
                            "REMIGIO CRESPO TORAL (GÚLAG)",
                            "SAN JUAN",
                            "ZHIDMAD",
                            "LUIS CORDERO VEGA",
                            "SIMÓN BOLÍVAR (CAB. EN GAÑANZOL)"
                        ]
                    ],
                    [
                        "canton" => "NABÓN",
                        "parroquias" => [
                            "NABÓN",
                            "COCHAPATA",
                            "EL PROGRESO (CAB.EN ZHOTA)",
                            "LAS NIEVES (CHAYA)",
                            "OÑA"
                        ]
                    ],
                    [
                        "canton" => "PAUTE",
                        "parroquias" => [
                            "PAUTE",
                            "AMALUZA",
                            "BULÁN (JOSÉ VÍCTOR IZQUIERDO)",
                            "CHICÁN (GUILLERMO ORTEGA)",
                            "EL CABO",
                            "GUACHAPALA",
                            "GUARAINAG",
                            "PALMAS",
                            "PAN",
                            "SAN CRISTÓBAL (CARLOS ORDÓÑEZ LAZO)",
                            "SEVILLA DE ORO",
                            "TOMEBAMBA",
                            "DUG DUG"
                        ]
                    ],
                    [
                        "canton" => "PUCARA",
                        "parroquias" => [
                            "PUCARÁ",
                            "CAMILO PONCE ENRÍQUEZ (CAB. EN RÍO 7 DE MOLLEPONGO)",
                            "SAN RAFAEL DE SHARUG"
                        ]
                    ],
                    [
                        "canton" => "SAN FERNANDO",
                        "parroquias" => [
                            "SAN FERNANDO",
                            "CHUMBLÍN"
                        ]
                    ],
                    [
                        "canton" => "SANTA ISABEL",
                        "parroquias" => [
                            "SANTA ISABEL (CHAGUARURCO)",
                            "ABDÓN CALDERÓN (LA UNIÓN)",
                            "EL CARMEN DE PIJILÍ",
                            "ZHAGLLI (SHAGLLI)",
                            "SAN SALVADOR DE CAÑARIBAMBA"
                        ]
                    ],
                    [
                        "canton" => "SIGSIG",
                        "parroquias" => [
                            "SIGSIG",
                            "CUCHIL (CUTCHIL)",
                            "GIMA",
                            "GUEL",
                            "LUDO",
                            "SAN BARTOLOMÉ",
                            "SAN JOSÉ DE RARANGA"
                        ]
                    ],
                    [
                        "canton" => "OÑA",
                        "parroquias" => [
                            "SAN FELIPE DE OÑA CABECERA CANTONAL",
                            "SUSUDEL"
                        ]
                    ],
                    [
                        "canton" => "CHORDELEG",
                        "parroquias" => [
                            "CHORDELEG",
                            "PRINCIPAL",
                            "LA UNIÓN",
                            "LUIS GALARZA ORELLANA (CAB.EN DELEGSOL)",
                            "SAN MARTÍN DE PUZHIO"
                        ]
                    ],
                    [
                        "canton" => "EL PAN",
                        "parroquias" => [
                            "EL PAN",
                            "AMALUZA",
                            "PALMAS",
                            "SAN VICENTE"
                        ]
                    ],
                    [
                        "canton" => "SEVILLA DE ORO",
                        "parroquias" => [
                            "SEVILLA DE ORO",
                            "AMALUZA",
                            "PALMAS"
                        ]
                    ],
                    [
                        "canton" => "GUACHAPALA",
                        "parroquias" => [
                            "GUACHAPALA"
                        ]
                    ],
                    [
                        "canton" => "CAMILO PONCE ENRÍQUEZ",
                        "parroquias" => [
                            "CAMILO PONCE ENRÍQUEZ",
                            "EL CARMEN DE PIJILÍ"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "BOLIVAR",
                "cantones" => [
                    [
                        "canton" => "GUARANDA",
                        "parroquias" => [
                            "ÁNGEL POLIBIO CHÁVES",
                            "GABRIEL IGNACIO VEINTIMILLA",
                            "GUANUJO",
                            "GUARANDA",
                            "FACUNDO VELA",
                            "GUANUJO",
                            "JULIO E. MORENO (CATANAHUÁN GRANDE)",
                            "LAS NAVES",
                            "SALINAS",
                            "SAN LORENZO",
                            "SAN SIMÓN (YACOTO)",
                            "SANTA FÉ (SANTA FÉ)",
                            "SIMIÁTUG",
                            "SAN LUIS DE PAMBIL"
                        ]
                    ],
                    [
                        "canton" => "CHILLANES",
                        "parroquias" => [
                            "CHILLANES",
                            "SAN JOSÉ DEL TAMBO (TAMBOPAMBA)"
                        ]
                    ],
                    [
                        "canton" => "CHIMBO",
                        "parroquias" => [
                            "SAN JOSÉ DE CHIMBO",
                            "ASUNCIÓN (ASANCOTO)",
                            "CALUMA",
                            "MAGDALENA (CHAPACOTO)",
                            "SAN SEBASTIÁN",
                            "TELIMBELA"
                        ]
                    ],
                    [
                        "canton" => "ECHEANDÍA",
                        "parroquias" => [
                            "ECHEANDÍA"
                        ]
                    ],
                    [
                        "canton" => "SAN MIGUEL",
                        "parroquias" => [
                            "SAN MIGUEL",
                            "BALSAPAMBA",
                            "BILOVÁN",
                            "RÉGULO DE MORA",
                            "SAN PABLO (SAN PABLO DE ATENAS)",
                            "SANTIAGO",
                            "SAN VICENTE"
                        ]
                    ],
                    [
                        "canton" => "CALUMA",
                        "parroquias" => [
                            "CALUMA"
                        ]
                    ],
                    [
                        "canton" => "LAS NAVES",
                        "parroquias" => [
                            "LAS MERCEDES",
                            "LAS NAVES",
                            "LAS NAVES"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "CAÑAR",
                "cantones" => [
                    [
                        "canton" => "AZOGUES",
                        "parroquias" => [
                            "AURELIO BAYAS MARTÍNEZ",
                            "AZOGUES",
                            "BORRERO",
                            "SAN FRANCISCO",
                            "AZOGUES",
                            "COJITAMBO",
                            "DÉLEG",
                            "GUAPÁN",
                            "JAVIER LOYOLA (CHUQUIPATA)",
                            "LUIS CORDERO",
                            "PINDILIG",
                            "RIVERA",
                            "SAN MIGUEL",
                            "SOLANO",
                            "TADAY"
                        ]
                    ],
                    [
                        "canton" => "BIBLIÁN",
                        "parroquias" => [
                            "BIBLIÁN",
                            "NAZÓN (CAB. EN PAMPA DE DOMÍNGUEZ)",
                            "SAN FRANCISCO DE SAGEO",
                            "TURUPAMBA",
                            "JERUSALÉN"
                        ]
                    ],
                    [
                        "canton" => "CAÑAR",
                        "parroquias" => [
                            "CAÑAR",
                            "CHONTAMARCA",
                            "CHOROCOPTE",
                            "GENERAL MORALES (SOCARTE)",
                            "GUALLETURO",
                            "HONORATO VÁSQUEZ (TAMBO VIEJO)",
                            "INGAPIRCA",
                            "JUNCAL",
                            "SAN ANTONIO",
                            "SUSCAL",
                            "TAMBO",
                            "ZHUD",
                            "VENTURA",
                            "DUCUR"
                        ]
                    ],
                    [
                        "canton" => "LA TRONCAL",
                        "parroquias" => [
                            "LA TRONCAL",
                            "MANUEL J. CALLE",
                            "PANCHO NEGRO"
                        ]
                    ],
                    [
                        "canton" => "EL TAMBO",
                        "parroquias" => [
                            "EL TAMBO"
                        ]
                    ],
                    [
                        "canton" => "DÉLEG",
                        "parroquias" => [
                            "DÉLEG",
                            "SOLANO"
                        ]
                    ],
                    [
                        "canton" => "SUSCAL",
                        "parroquias" => [
                            "SUSCAL"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "CARCHI",
                "cantones" => [
                    [
                        "canton" => "TULCÁN",
                        "parroquias" => [
                            "GONZÁLEZ SUÁREZ",
                            "TULCÁN",
                            "TULCÁN",
                            "EL CARMELO (EL PUN)",
                            "HUACA",
                            "JULIO ANDRADE (OREJUELA)",
                            "MALDONADO",
                            "PIOTER",
                            "TOBAR DONOSO (LA BOCANA DE CAMUMBÍ)",
                            "TUFIÑO",
                            "URBINA (TAYA)",
                            "EL CHICAL",
                            "MARISCAL SUCRE",
                            "SANTA MARTHA DE CUBA"
                        ]
                    ],
                    [
                        "canton" => "BOLÍVAR",
                        "parroquias" => [
                            "BOLÍVAR",
                            "GARCÍA MORENO",
                            "LOS ANDES",
                            "MONTE OLIVO",
                            "SAN VICENTE DE PUSIR",
                            "SAN RAFAEL"
                        ]
                    ],
                    [
                        "canton" => "ESPEJO",
                        "parroquias" => [
                            "EL ÁNGEL",
                            "27 DE SEPTIEMBRE",
                            "EL ANGEL",
                            "EL GOALTAL",
                            "LA LIBERTAD (ALIZO)",
                            "SAN ISIDRO"
                        ]
                    ],
                    [
                        "canton" => "MIRA",
                        "parroquias" => [
                            "MIRA (CHONTAHUASI)",
                            "CONCEPCIÓN",
                            "JIJÓN Y CAAMAÑO (CAB. EN RÍO BLANCO)",
                            "JUAN MONTALVO (SAN IGNACIO DE QUIL)"
                        ]
                    ],
                    [
                        "canton" => "MONTÚFAR",
                        "parroquias" => [
                            "GONZÁLEZ SUÁREZ",
                            "SAN JOSÉ",
                            "SAN GABRIEL",
                            "CRISTÓBAL COLÓN",
                            "CHITÁN DE NAVARRETE",
                            "FERNÁNDEZ SALVADOR",
                            "LA PAZ",
                            "PIARTAL"
                        ]
                    ],
                    [
                        "canton" => "SAN PEDRO DE HUACA",
                        "parroquias" => [
                            "HUACA",
                            "MARISCAL SUCRE"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "COTOPAXI",
                "cantones" => [
                    [
                        "canton" => "LATACUNGA",
                        "parroquias" => [
                            "ELOY ALFARO (SAN FELIPE)",
                            "IGNACIO FLORES (PARQUE FLORES)",
                            "JUAN MONTALVO (SAN SEBASTIÁN)",
                            "LA MATRIZ",
                            "SAN BUENAVENTURA",
                            "LATACUNGA",
                            "ALAQUES (ALÁQUEZ)",
                            "BELISARIO QUEVEDO (GUANAILÍN)",
                            "GUAITACAMA (GUAYTACAMA)",
                            "JOSEGUANGO BAJO",
                            "LAS PAMPAS",
                            "MULALÓ",
                            "11 DE NOVIEMBRE (ILINCHISI)",
                            "POALÓ",
                            "SAN JUAN DE PASTOCALLE",
                            "SIGCHOS",
                            "TANICUCHÍ",
                            "TOACASO",
                            "PALO QUEMADO"
                        ]
                    ],
                    [
                        "canton" => "LA MANÁ",
                        "parroquias" => [
                            "EL CARMEN",
                            "LA MANÁ",
                            "EL TRIUNFO",
                            "LA MANÁ",
                            "GUASAGANDA (CAB.EN GUASAGANDA",
                            "PUCAYACU"
                        ]
                    ],
                    [
                        "canton" => "PANGUA",
                        "parroquias" => [
                            "EL CORAZÓN",
                            "MORASPUNGO",
                            "PINLLOPATA",
                            "RAMÓN CAMPAÑA"
                        ]
                    ],
                    [
                        "canton" => "PUJILI",
                        "parroquias" => [
                            "PUJILÍ",
                            "ANGAMARCA",
                            "CHUCCHILÁN (CHUGCHILÁN)",
                            "GUANGAJE",
                            "ISINLIBÍ (ISINLIVÍ)",
                            "LA VICTORIA",
                            "PILALÓ",
                            "TINGO",
                            "ZUMBAHUA"
                        ]
                    ],
                    [
                        "canton" => "SALCEDO",
                        "parroquias" => [
                            "SAN MIGUEL",
                            "ANTONIO JOSÉ HOLGUÍN (SANTA LUCÍA)",
                            "CUSUBAMBA",
                            "MULALILLO",
                            "MULLIQUINDIL (SANTA ANA)",
                            "PANSALEO"
                        ]
                    ],
                    [
                        "canton" => "SAQUISILÍ",
                        "parroquias" => [
                            "SAQUISILÍ",
                            "CANCHAGUA",
                            "CHANTILÍN",
                            "COCHAPAMBA"
                        ]
                    ],
                    [
                        "canton" => "SIGCHOS",
                        "parroquias" => [
                            "SIGCHOS",
                            "CHUGCHILLÁN",
                            "ISINLIVÍ",
                            "LAS PAMPAS",
                            "PALO QUEMADO"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "CHIMBORAZO",
                "cantones" => [
                    [
                        "canton" => "RIOBAMBA",
                        "parroquias" => [
                            "LIZARZABURU",
                            "MALDONADO",
                            "VELASCO",
                            "VELOZ",
                            "YARUQUÍES",
                            "RIOBAMBA",
                            "CACHA (CAB. EN MACHÁNGARA)",
                            "CALPI",
                            "CUBIJÍES",
                            "FLORES",
                            "LICÁN",
                            "LICTO",
                            "PUNGALÁ",
                            "PUNÍN",
                            "QUIMIAG",
                            "SAN JUAN",
                            "SAN LUIS"
                        ]
                    ],
                    [
                        "canton" => "ALAUSI",
                        "parroquias" => [
                            "ALAUSÍ",
                            "ACHUPALLAS",
                            "CUMANDÁ",
                            "GUASUNTOS",
                            "HUIGRA",
                            "MULTITUD",
                            "PISTISHÍ (NARIZ DEL DIABLO)",
                            "PUMALLACTA",
                            "SEVILLA",
                            "SIBAMBE",
                            "TIXÁN"
                        ]
                    ],
                    [
                        "canton" => "COLTA",
                        "parroquias" => [
                            "CAJABAMBA",
                            "SICALPA",
                            "VILLA LA UNIÓN (CAJABAMBA)",
                            "CAÑI",
                            "COLUMBE",
                            "JUAN DE VELASCO (PANGOR)",
                            "SANTIAGO DE QUITO (CAB. EN SAN ANTONIO DE QUITO)"
                        ]
                    ],
                    [
                        "canton" => "CHAMBO",
                        "parroquias" => [
                            "CHAMBO"
                        ]
                    ],
                    [
                        "canton" => "CHUNCHI",
                        "parroquias" => [
                            "CHUNCHI",
                            "CAPZOL",
                            "COMPUD",
                            "GONZOL",
                            "LLAGOS"
                        ]
                    ],
                    [
                        "canton" => "GUAMOTE",
                        "parroquias" => [
                            "GUAMOTE",
                            "CEBADAS",
                            "PALMIRA"
                        ]
                    ],
                    [
                        "canton" => "GUANO",
                        "parroquias" => [
                            "EL ROSARIO",
                            "LA MATRIZ",
                            "GUANO",
                            "GUANANDO",
                            "ILAPO",
                            "LA PROVIDENCIA",
                            "SAN ANDRÉS",
                            "SAN GERARDO DE PACAICAGUÁN",
                            "SAN ISIDRO DE PATULÚ",
                            "SAN JOSÉ DEL CHAZO",
                            "SANTA FÉ DE GALÁN",
                            "VALPARAÍSO"
                        ]
                    ],
                    [
                        "canton" => "PALLATANGA",
                        "parroquias" => [
                            "PALLATANGA"
                        ]
                    ],
                    [
                        "canton" => "PENIPE",
                        "parroquias" => [
                            "PENIPE",
                            "EL ALTAR",
                            "MATUS",
                            "PUELA",
                            "SAN ANTONIO DE BAYUSHIG",
                            "LA CANDELARIA",
                            "BILBAO (CAB.EN QUILLUYACU)"
                        ]
                    ],
                    [
                        "canton" => "CUMANDÁ",
                        "parroquias" => [
                            "CUMANDÁ"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "EL ORO",
                "cantones" => [
                    [
                        "canton" => "MACHALA",
                        "parroquias" => [
                            "LA PROVIDENCIA",
                            "MACHALA",
                            "PUERTO BOLÍVAR",
                            "NUEVE DE MAYO",
                            "EL CAMBIO",
                            "MACHALA",
                            "EL CAMBIO",
                            "EL RETIRO"
                        ]
                    ],
                    [
                        "canton" => "ARENILLAS",
                        "parroquias" => [
                            "ARENILLAS",
                            "CHACRAS",
                            "LA LIBERTAD",
                            "LAS LAJAS (CAB. EN LA VICTORIA)",
                            "PALMALES",
                            "CARCABÓN"
                        ]
                    ],
                    [
                        "canton" => "ATAHUALPA",
                        "parroquias" => [
                            "PACCHA",
                            "AYAPAMBA",
                            "CORDONCILLO",
                            "MILAGRO",
                            "SAN JOSÉ",
                            "SAN JUAN DE CERRO AZUL"
                        ]
                    ],
                    [
                        "canton" => "BALSAS",
                        "parroquias" => [
                            "BALSAS",
                            "BELLAMARÍA"
                        ]
                    ],
                    [
                        "canton" => "CHILLA",
                        "parroquias" => [
                            "CHILLA"
                        ]
                    ],
                    [
                        "canton" => "EL GUABO",
                        "parroquias" => [
                            "EL GUABO",
                            "BARBONES (SUCRE)",
                            "LA IBERIA",
                            "TENDALES (CAB.EN PUERTO TENDALES)",
                            "RÍO BONITO"
                        ]
                    ],
                    [
                        "canton" => "HUAQUILLAS",
                        "parroquias" => [
                            "ECUADOR",
                            "EL PARAÍSO",
                            "HUALTACO",
                            "MILTON REYES",
                            "UNIÓN LOJANA",
                            "HUAQUILLAS"
                        ]
                    ],
                    [
                        "canton" => "MARCABELÍ",
                        "parroquias" => [
                            "MARCABELÍ",
                            "EL INGENIO"
                        ]
                    ],
                    [
                        "canton" => "PASAJE",
                        "parroquias" => [
                            "BOLÍVAR",
                            "LOMA DE FRANCO",
                            "OCHOA LEÓN (MATRIZ)",
                            "TRES CERRITOS",
                            "PASAJE",
                            "BUENAVISTA",
                            "CASACAY",
                            "LA PEAÑA",
                            "PROGRESO",
                            "UZHCURRUMI",
                            "CAÑAQUEMADA"
                        ]
                    ],
                    [
                        "canton" => "PIÑAS",
                        "parroquias" => [
                            "LA MATRIZ",
                            "LA SUSAYA",
                            "PIÑAS GRANDE",
                            "PIÑAS",
                            "CAPIRO (CAB. EN LA CAPILLA DE CAPIRO)",
                            "LA BOCANA",
                            "MOROMORO (CAB. EN EL VADO)",
                            "PIEDRAS",
                            "SAN ROQUE (AMBROSIO MALDONADO)",
                            "SARACAY"
                        ]
                    ],
                    [
                        "canton" => "PORTOVELO",
                        "parroquias" => [
                            "PORTOVELO",
                            "CURTINCAPA",
                            "MORALES",
                            "SALATÍ"
                        ]
                    ],
                    [
                        "canton" => "SANTA ROSA",
                        "parroquias" => [
                            "SANTA ROSA",
                            "PUERTO JELÍ",
                            "BALNEARIO JAMBELÍ (SATÉLITE)",
                            "JUMÓN (SATÉLITE)",
                            "NUEVO SANTA ROSA",
                            "SANTA ROSA",
                            "BELLAVISTA",
                            "JAMBELÍ",
                            "LA AVANZADA",
                            "SAN ANTONIO",
                            "TORATA",
                            "VICTORIA",
                            "BELLAMARÍA"
                        ]
                    ],
                    [
                        "canton" => "ZARUMA",
                        "parroquias" => [
                            "ZARUMA",
                            "ABAÑÍN",
                            "ARCAPAMBA",
                            "GUANAZÁN",
                            "GUIZHAGUIÑA",
                            "HUERTAS",
                            "MALVAS",
                            "MULUNCAY GRANDE",
                            "SINSAO",
                            "SALVIAS"
                        ]
                    ],
                    [
                        "canton" => "LAS LAJAS",
                        "parroquias" => [
                            "LA VICTORIA",
                            "PLATANILLOS",
                            "VALLE HERMOSO",
                            "LA VICTORIA",
                            "LA LIBERTAD",
                            "EL PARAÍSO",
                            "SAN ISIDRO"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "ESMERALDAS",
                "cantones" => [
                    [
                        "canton" => "ESMERALDAS",
                        "parroquias" => [
                            "BARTOLOMÉ RUIZ (CÉSAR FRANCO CARRIÓN)",
                            "5 DE AGOSTO",
                            "ESMERALDAS",
                            "LUIS TELLO (LAS PALMAS)",
                            "SIMÓN PLATA TORRES",
                            "ESMERALDAS",
                            "ATACAMES",
                            "CAMARONES (CAB. EN SAN VICENTE)",
                            "CRNEL. CARLOS CONCHA TORRES (CAB.EN HUELE)",
                            "CHINCA",
                            "CHONTADURO",
                            "CHUMUNDÉ",
                            "LAGARTO",
                            "LA UNIÓN",
                            "MAJUA",
                            "MONTALVO (CAB. EN HORQUETA)",
                            "RÍO VERDE",
                            "ROCAFUERTE",
                            "SAN MATEO",
                            "SÚA (CAB. EN LA BOCANA)",
                            "TABIAZO",
                            "TACHINA",
                            "TONCHIGÜE",
                            "VUELTA LARGA"
                        ]
                    ],
                    [
                        "canton" => "ELOY ALFARO",
                        "parroquias" => [
                            "VALDEZ (LIMONES)",
                            "ANCHAYACU",
                            "ATAHUALPA (CAB. EN CAMARONES)",
                            "BORBÓN",
                            "LA TOLA",
                            "LUIS VARGAS TORRES (CAB. EN PLAYA DE ORO)",
                            "MALDONADO",
                            "PAMPANAL DE BOLÍVAR",
                            "SAN FRANCISCO DE ONZOLE",
                            "SANTO DOMINGO DE ONZOLE",
                            "SELVA ALEGRE",
                            "TELEMBÍ",
                            "COLÓN ELOY DEL MARÍA",
                            "SAN JOSÉ DE CAYAPAS",
                            "TIMBIRÉ"
                        ]
                    ],
                    [
                        "canton" => "MUISNE",
                        "parroquias" => [
                            "MUISNE",
                            "BOLÍVAR",
                            "DAULE",
                            "GALERA",
                            "QUINGUE (OLMEDO PERDOMO FRANCO)",
                            "SALIMA",
                            "SAN FRANCISCO",
                            "SAN GREGORIO",
                            "SAN JOSÉ DE CHAMANGA (CAB.EN CHAMANGA)"
                        ]
                    ],
                    [
                        "canton" => "QUININDÉ",
                        "parroquias" => [
                            "ROSA ZÁRATE (QUININDÉ)",
                            "CUBE",
                            "CHURA (CHANCAMA) (CAB. EN EL YERBERO)",
                            "MALIMPIA",
                            "VICHE",
                            "LA UNIÓN"
                        ]
                    ],
                    [
                        "canton" => "SAN LORENZO",
                        "parroquias" => [
                            "SAN LORENZO",
                            "ALTO TAMBO (CAB. EN GUADUAL)",
                            "ANCÓN (PICHANGAL) (CAB. EN PALMA REAL)",
                            "CALDERÓN",
                            "CARONDELET",
                            "5 DE JUNIO (CAB. EN UIMBI)",
                            "CONCEPCIÓN",
                            "MATAJE (CAB. EN SANTANDER)",
                            "SAN JAVIER DE CACHAVÍ (CAB. EN SAN JAVIER)",
                            "SANTA RITA",
                            "TAMBILLO",
                            "TULULBÍ (CAB. EN RICAURTE)",
                            "URBINA"
                        ]
                    ],
                    [
                        "canton" => "ATACAMES",
                        "parroquias" => [
                            "ATACAMES",
                            "LA UNIÓN",
                            "SÚA (CAB. EN LA BOCANA)",
                            "TONCHIGÜE",
                            "TONSUPA"
                        ]
                    ],
                    [
                        "canton" => "RIOVERDE",
                        "parroquias" => [
                            "RIOVERDE",
                            "CHONTADURO",
                            "CHUMUNDÉ",
                            "LAGARTO",
                            "MONTALVO (CAB. EN HORQUETA)",
                            "ROCAFUERTE"
                        ]
                    ],
                    [
                        "canton" => "LA CONCORDIA",
                        "parroquias" => [
                            "LA CONCORDIA",
                            "MONTERREY",
                            "LA VILLEGAS",
                            "PLAN PILOTO"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "GUAYAS",
                "cantones" => [
                    [
                        "canton" => "GUAYAQUIL",
                        "parroquias" => [
                            "AYACUCHO",
                            "BOLÍVAR (SAGRARIO)",
                            "CARBO (CONCEPCIÓN)",
                            "FEBRES CORDERO",
                            "GARCÍA MORENO",
                            "LETAMENDI",
                            "NUEVE DE OCTUBRE",
                            "OLMEDO (SAN ALEJO)",
                            "ROCA",
                            "ROCAFUERTE",
                            "SUCRE",
                            "TARQUI",
                            "URDANETA",
                            "XIMENA",
                            "PASCUALES",
                            "GUAYAQUIL",
                            "CHONGÓN",
                            "JUAN GÓMEZ RENDÓN (PROGRESO)",
                            "MORRO",
                            "PASCUALES",
                            "PLAYAS (GRAL. VILLAMIL)",
                            "POSORJA",
                            "PUNÁ",
                            "TENGUEL"
                        ]
                    ],
                    [
                        "canton" => "ALFREDO BAQUERIZO MORENO (JUJÁN)",
                        "parroquias" => [
                            "ALFREDO BAQUERIZO MORENO (JUJÁN)"
                        ]
                    ],
                    [
                        "canton" => "BALAO",
                        "parroquias" => [
                            "BALAO"
                        ]
                    ],
                    [
                        "canton" => "BALZAR",
                        "parroquias" => [
                            "BALZAR"
                        ]
                    ],
                    [
                        "canton" => "COLIMES",
                        "parroquias" => [
                            "COLIMES",
                            "SAN JACINTO"
                        ]
                    ],
                    [
                        "canton" => "DAULE",
                        "parroquias" => [
                            "DAULE",
                            "LA AURORA (SATÉLITE)",
                            "BANIFE",
                            "EMILIANO CAICEDO MARCOS",
                            "MAGRO",
                            "PADRE JUAN BAUTISTA AGUIRRE",
                            "SANTA CLARA",
                            "VICENTE PIEDRAHITA",
                            "DAULE",
                            "ISIDRO AYORA (SOLEDAD)",
                            "JUAN BAUTISTA AGUIRRE (LOS TINTOS)",
                            "LAUREL",
                            "LIMONAL",
                            "LOMAS DE SARGENTILLO",
                            "LOS LOJAS (ENRIQUE BAQUERIZO MORENO)",
                            "PIEDRAHITA (NOBOL)"
                        ]
                    ],
                    [
                        "canton" => "DURÁN",
                        "parroquias" => [
                            "ELOY ALFARO (DURÁN)",
                            "EL RECREO",
                            "ELOY ALFARO (DURÁN)"
                        ]
                    ],
                    [
                        "canton" => "EL EMPALME",
                        "parroquias" => [
                            "VELASCO IBARRA (EL EMPALME)",
                            "GUAYAS (PUEBLO NUEVO)",
                            "EL ROSARIO"
                        ]
                    ],
                    [
                        "canton" => "EL TRIUNFO",
                        "parroquias" => [
                            "EL TRIUNFO"
                        ]
                    ],
                    [
                        "canton" => "MILAGRO",
                        "parroquias" => [
                            "MILAGRO",
                            "CHOBO",
                            "GENERAL ELIZALDE (BUCAY)",
                            "MARISCAL SUCRE (HUAQUES)",
                            "ROBERTO ASTUDILLO (CAB. EN CRUCE DE VENECIA)"
                        ]
                    ],
                    [
                        "canton" => "NARANJAL",
                        "parroquias" => [
                            "NARANJAL",
                            "JESÚS MARÍA",
                            "SAN CARLOS",
                            "SANTA ROSA DE FLANDES",
                            "TAURA"
                        ]
                    ],
                    [
                        "canton" => "NARANJITO",
                        "parroquias" => [
                            "NARANJITO"
                        ]
                    ],
                    [
                        "canton" => "PALESTINA",
                        "parroquias" => [
                            "PALESTINA"
                        ]
                    ],
                    [
                        "canton" => "PEDRO CARBO",
                        "parroquias" => [
                            "PEDRO CARBO",
                            "VALLE DE LA VIRGEN",
                            "SABANILLA"
                        ]
                    ],
                    [
                        "canton" => "SAMBORONDÓN",
                        "parroquias" => [
                            "SAMBORONDÓN",
                            "LA PUNTILLA (SATÉLITE)",
                            "SAMBORONDÓN",
                            "TARIFA"
                        ]
                    ],
                    [
                        "canton" => "SANTA LUCÍA",
                        "parroquias" => [
                            "SANTA LUCÍA"
                        ]
                    ],
                    [
                        "canton" => "SALITRE (URBINA JADO)",
                        "parroquias" => [
                            "BOCANA",
                            "CANDILEJOS",
                            "CENTRAL",
                            "PARAÍSO",
                            "SAN MATEO",
                            "EL SALITRE (LAS RAMAS)",
                            "GRAL. VERNAZA (DOS ESTEROS)",
                            "LA VICTORIA (ÑAUZA)",
                            "JUNQUILLAL"
                        ]
                    ],
                    [
                        "canton" => "SAN JACINTO DE YAGUACHI",
                        "parroquias" => [
                            "SAN JACINTO DE YAGUACHI",
                            "CRNEL. LORENZO DE GARAICOA (PEDREGAL)",
                            "CRNEL. MARCELINO MARIDUEÑA (SAN CARLOS)",
                            "GRAL. PEDRO J. MONTERO (BOLICHE)",
                            "SIMÓN BOLÍVAR",
                            "YAGUACHI VIEJO (CONE)",
                            "VIRGEN DE FÁTIMA"
                        ]
                    ],
                    [
                        "canton" => "PLAYAS",
                        "parroquias" => [
                            "GENERAL VILLAMIL (PLAYAS)"
                        ]
                    ],
                    [
                        "canton" => "SIMÓN BOLÍVAR",
                        "parroquias" => [
                            "SIMÓN BOLÍVAR",
                            "CRNEL.LORENZO DE GARAICOA (PEDREGAL)"
                        ]
                    ],
                    [
                        "canton" => "CORONEL MARCELINO MARIDUEÑA",
                        "parroquias" => [
                            "CORONEL MARCELINO MARIDUEÑA (SAN CARLOS)"
                        ]
                    ],
                    [
                        "canton" => "LOMAS DE SARGENTILLO",
                        "parroquias" => [
                            "LOMAS DE SARGENTILLO",
                            "ISIDRO AYORA (SOLEDAD)"
                        ]
                    ],
                    [
                        "canton" => "NOBOL",
                        "parroquias" => [
                            "NARCISA DE JESÚS"
                        ]
                    ],
                    [
                        "canton" => "GENERAL ANTONIO ELIZALDE",
                        "parroquias" => [
                            "GENERAL ANTONIO ELIZALDE (BUCAY)"
                        ]
                    ],
                    [
                        "canton" => "ISIDRO AYORA",
                        "parroquias" => [
                            "ISIDRO AYORA"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "IMBABURA",
                "cantones" => [
                    [
                        "canton" => "IBARRA",
                        "parroquias" => [
                            "CARANQUI",
                            "GUAYAQUIL DE ALPACHACA",
                            "SAGRARIO",
                            "SAN FRANCISCO",
                            "LA DOLOROSA DEL PRIORATO",
                            "SAN MIGUEL DE IBARRA",
                            "AMBUQUÍ",
                            "ANGOCHAGUA",
                            "CAROLINA",
                            "LA ESPERANZA",
                            "LITA",
                            "SALINAS",
                            "SAN ANTONIO"
                        ]
                    ],
                    [
                        "canton" => "ANTONIO ANTE",
                        "parroquias" => [
                            "ANDRADE MARÍN (LOURDES)",
                            "ATUNTAQUI",
                            "ATUNTAQUI",
                            "IMBAYA (SAN LUIS DE COBUENDO)",
                            "SAN FRANCISCO DE NATABUELA",
                            "SAN JOSÉ DE CHALTURA",
                            "SAN ROQUE"
                        ]
                    ],
                    [
                        "canton" => "COTACACHI",
                        "parroquias" => [
                            "SAGRARIO",
                            "SAN FRANCISCO",
                            "COTACACHI",
                            "APUELA",
                            "GARCÍA MORENO (LLURIMAGUA)",
                            "IMANTAG",
                            "PEÑAHERRERA",
                            "PLAZA GUTIÉRREZ (CALVARIO)",
                            "QUIROGA",
                            "6 DE JULIO DE CUELLAJE (CAB. EN CUELLAJE)",
                            "VACAS GALINDO (EL CHURO) (CAB.EN SAN MIGUEL ALTO"
                        ]
                    ],
                    [
                        "canton" => "OTAVALO",
                        "parroquias" => [
                            "JORDÁN",
                            "SAN LUIS",
                            "OTAVALO",
                            "DR. MIGUEL EGAS CABEZAS (PEGUCHE)",
                            "EUGENIO ESPEJO (CALPAQUÍ)",
                            "GONZÁLEZ SUÁREZ",
                            "PATAQUÍ",
                            "SAN JOSÉ DE QUICHINCHE",
                            "SAN JUAN DE ILUMÁN",
                            "SAN PABLO",
                            "SAN RAFAEL",
                            "SELVA ALEGRE (CAB.EN SAN MIGUEL DE PAMPLONA)"
                        ]
                    ],
                    [
                        "canton" => "PIMAMPIRO",
                        "parroquias" => [
                            "PIMAMPIRO",
                            "CHUGÁ",
                            "MARIANO ACOSTA",
                            "SAN FRANCISCO DE SIGSIPAMBA"
                        ]
                    ],
                    [
                        "canton" => "SAN MIGUEL DE URCUQUÍ",
                        "parroquias" => [
                            "URCUQUÍ CABECERA CANTONAL",
                            "CAHUASQUÍ",
                            "LA MERCED DE BUENOS AIRES",
                            "PABLO ARENAS",
                            "SAN BLAS",
                            "TUMBABIRO"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "LOJA",
                "cantones" => [
                    [
                        "canton" => "LOJA",
                        "parroquias" => [
                            "EL SAGRARIO",
                            "SAN SEBASTIÁN",
                            "SUCRE",
                            "VALLE",
                            "LOJA",
                            "CHANTACO",
                            "CHUQUIRIBAMBA",
                            "EL CISNE",
                            "GUALEL",
                            "JIMBILLA",
                            "MALACATOS (VALLADOLID)",
                            "SAN LUCAS",
                            "SAN PEDRO DE VILCABAMBA",
                            "SANTIAGO",
                            "TAQUIL (MIGUEL RIOFRÍO)",
                            "VILCABAMBA (VICTORIA)",
                            "YANGANA (ARSENIO CASTILLO)",
                            "QUINARA"
                        ]
                    ],
                    [
                        "canton" => "CALVAS",
                        "parroquias" => [
                            "CARIAMANGA",
                            "CHILE",
                            "SAN VICENTE",
                            "CARIAMANGA",
                            "COLAISACA",
                            "EL LUCERO",
                            "UTUANA",
                            "SANGUILLÍN"
                        ]
                    ],
                    [
                        "canton" => "CATAMAYO",
                        "parroquias" => [
                            "CATAMAYO",
                            "SAN JOSÉ",
                            "CATAMAYO (LA TOMA)",
                            "EL TAMBO",
                            "GUAYQUICHUMA",
                            "SAN PEDRO DE LA BENDITA",
                            "ZAMBI"
                        ]
                    ],
                    [
                        "canton" => "CELICA",
                        "parroquias" => [
                            "CELICA",
                            "CRUZPAMBA (CAB. EN CARLOS BUSTAMANTE)",
                            "CHAQUINAL",
                            "12 DE DICIEMBRE (CAB. EN ACHIOTES)",
                            "PINDAL (FEDERICO PÁEZ)",
                            "POZUL (SAN JUAN DE POZUL)",
                            "SABANILLA",
                            "TNTE. MAXIMILIANO RODRÍGUEZ LOAIZA"
                        ]
                    ],
                    [
                        "canton" => "CHAGUARPAMBA",
                        "parroquias" => [
                            "CHAGUARPAMBA",
                            "BUENAVISTA",
                            "EL ROSARIO",
                            "SANTA RUFINA",
                            "AMARILLOS"
                        ]
                    ],
                    [
                        "canton" => "ESPÍNDOLA",
                        "parroquias" => [
                            "AMALUZA",
                            "BELLAVISTA",
                            "JIMBURA",
                            "SANTA TERESITA",
                            "27 DE ABRIL (CAB. EN LA NARANJA)",
                            "EL INGENIO",
                            "EL AIRO"
                        ]
                    ],
                    [
                        "canton" => "GONZANAMÁ",
                        "parroquias" => [
                            "GONZANAMÁ",
                            "CHANGAIMINA (LA LIBERTAD)",
                            "FUNDOCHAMBA",
                            "NAMBACOLA",
                            "PURUNUMA (EGUIGUREN)",
                            "QUILANGA (LA PAZ)",
                            "SACAPALCA",
                            "SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)"
                        ]
                    ],
                    [
                        "canton" => "MACARÁ",
                        "parroquias" => [
                            "GENERAL ELOY ALFARO (SAN SEBASTIÁN)",
                            "MACARÁ (MANUEL ENRIQUE RENGEL SUQUILANDA)",
                            "MACARÁ",
                            "LARAMA",
                            "LA VICTORIA",
                            "SABIANGO (LA CAPILLA)"
                        ]
                    ],
                    [
                        "canton" => "PALTAS",
                        "parroquias" => [
                            "CATACOCHA",
                            "LOURDES",
                            "CATACOCHA",
                            "CANGONAMÁ",
                            "GUACHANAMÁ",
                            "LA TINGUE",
                            "LAURO GUERRERO",
                            "OLMEDO (SANTA BÁRBARA)",
                            "ORIANGA",
                            "SAN ANTONIO",
                            "CASANGA",
                            "YAMANA"
                        ]
                    ],
                    [
                        "canton" => "PUYANGO",
                        "parroquias" => [
                            "ALAMOR",
                            "CIANO",
                            "EL ARENAL",
                            "EL LIMO (MARIANA DE JESÚS)",
                            "MERCADILLO",
                            "VICENTINO"
                        ]
                    ],
                    [
                        "canton" => "SARAGURO",
                        "parroquias" => [
                            "SARAGURO",
                            "EL PARAÍSO DE CELÉN",
                            "EL TABLÓN",
                            "LLUZHAPA",
                            "MANÚ",
                            "SAN ANTONIO DE QUMBE (CUMBE)",
                            "SAN PABLO DE TENTA",
                            "SAN SEBASTIÁN DE YÚLUC",
                            "SELVA ALEGRE",
                            "URDANETA (PAQUISHAPA)",
                            "SUMAYPAMBA"
                        ]
                    ],
                    [
                        "canton" => "SOZORANGA",
                        "parroquias" => [
                            "SOZORANGA",
                            "NUEVA FÁTIMA",
                            "TACAMOROS"
                        ]
                    ],
                    [
                        "canton" => "ZAPOTILLO",
                        "parroquias" => [
                            "ZAPOTILLO",
                            "MANGAHURCO (CAZADEROS)",
                            "GARZAREAL",
                            "LIMONES",
                            "PALETILLAS",
                            "BOLASPAMBA"
                        ]
                    ],
                    [
                        "canton" => "PINDAL",
                        "parroquias" => [
                            "PINDAL",
                            "CHAQUINAL",
                            "12 DE DICIEMBRE (CAB.EN ACHIOTES)",
                            "MILAGROS"
                        ]
                    ],
                    [
                        "canton" => "QUILANGA",
                        "parroquias" => [
                            "QUILANGA",
                            "FUNDOCHAMBA",
                            "SAN ANTONIO DE LAS ARADAS (CAB. EN LAS ARADAS)"
                        ]
                    ],
                    [
                        "canton" => "OLMEDO",
                        "parroquias" => [
                            "OLMEDO",
                            "LA TINGUE"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "LOS RIOS",
                "cantones" => [
                    [
                        "canton" => "BABAHOYO",
                        "parroquias" => [
                            "CLEMENTE BAQUERIZO",
                            "DR. CAMILO PONCE",
                            "BARREIRO",
                            "EL SALTO",
                            "BABAHOYO",
                            "BARREIRO (SANTA RITA)",
                            "CARACOL",
                            "FEBRES CORDERO (LAS JUNTAS)",
                            "PIMOCHA",
                            "LA UNIÓN"
                        ]
                    ],
                    [
                        "canton" => "BABA",
                        "parroquias" => [
                            "BABA",
                            "GUARE",
                            "ISLA DE BEJUCAL"
                        ]
                    ],
                    [
                        "canton" => "MONTALVO",
                        "parroquias" => [
                            "MONTALVO"
                        ]
                    ],
                    [
                        "canton" => "PUEBLOVIEJO",
                        "parroquias" => [
                            "PUEBLOVIEJO",
                            "PUERTO PECHICHE",
                            "SAN JUAN"
                        ]
                    ],
                    [
                        "canton" => "QUEVEDO",
                        "parroquias" => [
                            "QUEVEDO",
                            "SAN CAMILO",
                            "SAN JOSÉ",
                            "GUAYACÁN",
                            "NICOLÁS INFANTE DÍAZ",
                            "SAN CRISTÓBAL",
                            "SIETE DE OCTUBRE",
                            "24 DE MAYO",
                            "VENUS DEL RÍO QUEVEDO",
                            "VIVA ALFARO",
                            "QUEVEDO",
                            "BUENA FÉ",
                            "MOCACHE",
                            "SAN CARLOS",
                            "VALENCIA",
                            "LA ESPERANZA"
                        ]
                    ],
                    [
                        "canton" => "URDANETA",
                        "parroquias" => [
                            "CATARAMA",
                            "RICAURTE"
                        ]
                    ],
                    [
                        "canton" => "VENTANAS",
                        "parroquias" => [
                            "10 DE NOVIEMBRE",
                            "VENTANAS",
                            "QUINSALOMA",
                            "ZAPOTAL",
                            "CHACARITA",
                            "LOS ÁNGELES"
                        ]
                    ],
                    [
                        "canton" => "VÍNCES",
                        "parroquias" => [
                            "VINCES",
                            "ANTONIO SOTOMAYOR (CAB. EN PLAYAS DE VINCES)",
                            "PALENQUE"
                        ]
                    ],
                    [
                        "canton" => "PALENQUE",
                        "parroquias" => [
                            "PALENQUE"
                        ]
                    ],
                    [
                        "canton" => "BUENA FÉ",
                        "parroquias" => [
                            "SAN JACINTO DE BUENA FÉ",
                            "7 DE AGOSTO",
                            "11 DE OCTUBRE",
                            "SAN JACINTO DE BUENA FÉ",
                            "PATRICIA PILAR"
                        ]
                    ],
                    [
                        "canton" => "VALENCIA",
                        "parroquias" => [
                            "VALENCIA"
                        ]
                    ],
                    [
                        "canton" => "MOCACHE",
                        "parroquias" => [
                            "MOCACHE"
                        ]
                    ],
                    [
                        "canton" => "QUINSALOMA",
                        "parroquias" => [
                            "QUINSALOMA"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "MANABI",
                "cantones" => [
                    [
                        "canton" => "PORTOVIEJO",
                        "parroquias" => [
                            "PORTOVIEJO",
                            "12 DE MARZO",
                            "COLÓN",
                            "PICOAZÁ",
                            "SAN PABLO",
                            "ANDRÉS DE VERA",
                            "FRANCISCO PACHECO",
                            "18 DE OCTUBRE",
                            "SIMÓN BOLÍVAR",
                            "PORTOVIEJO",
                            "ABDÓN CALDERÓN (SAN FRANCISCO)",
                            "ALHAJUELA (BAJO GRANDE)",
                            "CRUCITA",
                            "PUEBLO NUEVO",
                            "RIOCHICO (RÍO CHICO)",
                            "SAN PLÁCIDO",
                            "CHIRIJOS"
                        ]
                    ],
                    [
                        "canton" => "BOLÍVAR",
                        "parroquias" => [
                            "CALCETA",
                            "MEMBRILLO",
                            "QUIROGA"
                        ]
                    ],
                    [
                        "canton" => "CHONE",
                        "parroquias" => [
                            "CHONE",
                            "SANTA RITA",
                            "CHONE",
                            "BOYACÁ",
                            "CANUTO",
                            "CONVENTO",
                            "CHIBUNGA",
                            "ELOY ALFARO",
                            "RICAURTE",
                            "SAN ANTONIO"
                        ]
                    ],
                    [
                        "canton" => "EL CARMEN",
                        "parroquias" => [
                            "EL CARMEN",
                            "4 DE DICIEMBRE",
                            "EL CARMEN",
                            "WILFRIDO LOOR MOREIRA (MAICITO)",
                            "SAN PEDRO DE SUMA"
                        ]
                    ],
                    [
                        "canton" => "FLAVIO ALFARO",
                        "parroquias" => [
                            "FLAVIO ALFARO",
                            "SAN FRANCISCO DE NOVILLO (CAB. EN",
                            "ZAPALLO"
                        ]
                    ],
                    [
                        "canton" => "JIPIJAPA",
                        "parroquias" => [
                            "DR. MIGUEL MORÁN LUCIO",
                            "MANUEL INOCENCIO PARRALES Y GUALE",
                            "SAN LORENZO DE JIPIJAPA",
                            "JIPIJAPA",
                            "AMÉRICA",
                            "EL ANEGADO (CAB. EN ELOY ALFARO)",
                            "JULCUY",
                            "LA UNIÓN",
                            "MACHALILLA",
                            "MEMBRILLAL",
                            "PEDRO PABLO GÓMEZ",
                            "PUERTO DE CAYO",
                            "PUERTO LÓPEZ"
                        ]
                    ],
                    [
                        "canton" => "JUNÍN",
                        "parroquias" => [
                            "JUNÍN"
                        ]
                    ],
                    [
                        "canton" => "MANTA",
                        "parroquias" => [
                            "LOS ESTEROS",
                            "MANTA",
                            "SAN MATEO",
                            "TARQUI",
                            "ELOY ALFARO",
                            "MANTA",
                            "SAN LORENZO",
                            "SANTA MARIANITA (BOCA DE PACOCHE)"
                        ]
                    ],
                    [
                        "canton" => "MONTECRISTI",
                        "parroquias" => [
                            "ANIBAL SAN ANDRÉS",
                            "MONTECRISTI",
                            "EL COLORADO",
                            "GENERAL ELOY ALFARO",
                            "LEONIDAS PROAÑO",
                            "MONTECRISTI",
                            "JARAMIJÓ",
                            "LA PILA"
                        ]
                    ],
                    [
                        "canton" => "PAJÁN",
                        "parroquias" => [
                            "PAJÁN",
                            "CAMPOZANO (LA PALMA DE PAJÁN)",
                            "CASCOL",
                            "GUALE",
                            "LASCANO"
                        ]
                    ],
                    [
                        "canton" => "PICHINCHA",
                        "parroquias" => [
                            "PICHINCHA",
                            "BARRAGANETE",
                            "SAN SEBASTIÁN"
                        ]
                    ],
                    [
                        "canton" => "ROCAFUERTE",
                        "parroquias" => [
                            "ROCAFUERTE"
                        ]
                    ],
                    [
                        "canton" => "SANTA ANA",
                        "parroquias" => [
                            "SANTA ANA",
                            "LODANA",
                            "SANTA ANA DE VUELTA LARGA",
                            "AYACUCHO",
                            "HONORATO VÁSQUEZ (CAB. EN VÁSQUEZ)",
                            "LA UNIÓN",
                            "OLMEDO",
                            "SAN PABLO (CAB. EN PUEBLO NUEVO)"
                        ]
                    ],
                    [
                        "canton" => "SUCRE",
                        "parroquias" => [
                            "BAHÍA DE CARÁQUEZ",
                            "LEONIDAS PLAZA GUTIÉRREZ",
                            "BAHÍA DE CARÁQUEZ",
                            "CANOA",
                            "COJIMÍES",
                            "CHARAPOTÓ",
                            "10 DE AGOSTO",
                            "JAMA",
                            "PEDERNALES",
                            "SAN ISIDRO",
                            "SAN VICENTE"
                        ]
                    ],
                    [
                        "canton" => "TOSAGUA",
                        "parroquias" => [
                            "TOSAGUA",
                            "BACHILLERO",
                            "ANGEL PEDRO GILER (LA ESTANCILLA)"
                        ]
                    ],
                    [
                        "canton" => "24 DE MAYO",
                        "parroquias" => [
                            "SUCRE",
                            "BELLAVISTA",
                            "NOBOA",
                            "ARQ. SIXTO DURÁN BALLÉN"
                        ]
                    ],
                    [
                        "canton" => "PEDERNALES",
                        "parroquias" => [
                            "PEDERNALES",
                            "COJIMÍES",
                            "10 DE AGOSTO",
                            "ATAHUALPA"
                        ]
                    ],
                    [
                        "canton" => "OLMEDO",
                        "parroquias" => [
                            "OLMEDO"
                        ]
                    ],
                    [
                        "canton" => "PUERTO LÓPEZ",
                        "parroquias" => [
                            "PUERTO LÓPEZ",
                            "MACHALILLA",
                            "SALANGO"
                        ]
                    ],
                    [
                        "canton" => "JAMA",
                        "parroquias" => [
                            "JAMA"
                        ]
                    ],
                    [
                        "canton" => "JARAMIJÓ",
                        "parroquias" => [
                            "JARAMIJÓ"
                        ]
                    ],
                    [
                        "canton" => "SAN VICENTE",
                        "parroquias" => [
                            "SAN VICENTE",
                            "CANOA"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "MORONA SANTIAGO",
                "cantones" => [
                    [
                        "canton" => "MORONA",
                        "parroquias" => [
                            "MACAS",
                            "ALSHI (CAB. EN 9 DE OCTUBRE)",
                            "CHIGUAZA",
                            "GENERAL PROAÑO",
                            "HUASAGA (CAB.EN WAMPUIK)",
                            "MACUMA",
                            "SAN ISIDRO",
                            "SEVILLA DON BOSCO",
                            "SINAÍ",
                            "TAISHA",
                            "ZUÑA (ZÚÑAC)",
                            "TUUTINENTZA",
                            "CUCHAENTZA",
                            "SAN JOSÉ DE MORONA",
                            "RÍO BLANCO"
                        ]
                    ],
                    [
                        "canton" => "GUALAQUIZA",
                        "parroquias" => [
                            "GUALAQUIZA",
                            "MERCEDES MOLINA",
                            "GUALAQUIZA",
                            "AMAZONAS (ROSARIO DE CUYES)",
                            "BERMEJOS",
                            "BOMBOIZA",
                            "CHIGÜINDA",
                            "EL ROSARIO",
                            "NUEVA TARQUI",
                            "SAN MIGUEL DE CUYES",
                            "EL IDEAL"
                        ]
                    ],
                    [
                        "canton" => "LIMÓN INDANZA",
                        "parroquias" => [
                            "GENERAL LEONIDAS PLAZA GUTIÉRREZ (LIMÓN)",
                            "INDANZA",
                            "PAN DE AZÚCAR",
                            "SAN ANTONIO (CAB. EN SAN ANTONIO CENTRO",
                            "SAN CARLOS DE LIMÓN (SAN CARLOS DEL",
                            "SAN JUAN BOSCO",
                            "SAN MIGUEL DE CONCHAY",
                            "SANTA SUSANA DE CHIVIAZA (CAB. EN CHIVIAZA)",
                            "YUNGANZA (CAB. EN EL ROSARIO)"
                        ]
                    ],
                    [
                        "canton" => "PALORA",
                        "parroquias" => [
                            "PALORA (METZERA)",
                            "ARAPICOS",
                            "CUMANDÁ (CAB. EN COLONIA AGRÍCOLA SEVILLA DEL ORO)",
                            "HUAMBOYA",
                            "SANGAY (CAB. EN NAYAMANACA)"
                        ]
                    ],
                    [
                        "canton" => "SANTIAGO",
                        "parroquias" => [
                            "SANTIAGO DE MÉNDEZ",
                            "COPAL",
                            "CHUPIANZA",
                            "PATUCA",
                            "SAN LUIS DE EL ACHO (CAB. EN EL ACHO)",
                            "SANTIAGO",
                            "TAYUZA",
                            "SAN FRANCISCO DE CHINIMBIMI"
                        ]
                    ],
                    [
                        "canton" => "SUCÚA",
                        "parroquias" => [
                            "SUCÚA",
                            "ASUNCIÓN",
                            "HUAMBI",
                            "LOGROÑO",
                            "YAUPI",
                            "SANTA MARIANITA DE JESÚS"
                        ]
                    ],
                    [
                        "canton" => "HUAMBOYA",
                        "parroquias" => [
                            "HUAMBOYA",
                            "CHIGUAZA",
                            "PABLO SEXTO"
                        ]
                    ],
                    [
                        "canton" => "SAN JUAN BOSCO",
                        "parroquias" => [
                            "SAN JUAN BOSCO",
                            "PAN DE AZÚCAR",
                            "SAN CARLOS DE LIMÓN",
                            "SAN JACINTO DE WAKAMBEIS",
                            "SANTIAGO DE PANANZA"
                        ]
                    ],
                    [
                        "canton" => "TAISHA",
                        "parroquias" => [
                            "TAISHA",
                            "HUASAGA (CAB. EN WAMPUIK)",
                            "MACUMA",
                            "TUUTINENTZA",
                            "PUMPUENTSA"
                        ]
                    ],
                    [
                        "canton" => "LOGROÑO",
                        "parroquias" => [
                            "LOGROÑO",
                            "YAUPI",
                            "SHIMPIS"
                        ]
                    ],
                    [
                        "canton" => "PABLO SEXTO",
                        "parroquias" => [
                            "PABLO SEXTO"
                        ]
                    ],
                    [
                        "canton" => "TIWINTZA",
                        "parroquias" => [
                            "SANTIAGO",
                            "SAN JOSÉ DE MORONA"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "NAPO",
                "cantones" => [
                    [
                        "canton" => "TENA",
                        "parroquias" => [
                            "TENA",
                            "AHUANO",
                            "CARLOS JULIO AROSEMENA TOLA (ZATZA-YACU)",
                            "CHONTAPUNTA",
                            "PANO",
                            "PUERTO MISAHUALLI",
                            "PUERTO NAPO",
                            "TÁLAG",
                            "SAN JUAN DE MUYUNA"
                        ]
                    ],
                    [
                        "canton" => "ARCHIDONA",
                        "parroquias" => [
                            "ARCHIDONA",
                            "AVILA",
                            "COTUNDO",
                            "LORETO",
                            "SAN PABLO DE USHPAYACU",
                            "PUERTO MURIALDO"
                        ]
                    ],
                    [
                        "canton" => "EL CHACO",
                        "parroquias" => [
                            "EL CHACO",
                            "GONZALO DíAZ DE PINEDA (EL BOMBÓN)",
                            "LINARES",
                            "OYACACHI",
                            "SANTA ROSA",
                            "SARDINAS"
                        ]
                    ],
                    [
                        "canton" => "QUIJOS",
                        "parroquias" => [
                            "BAEZA",
                            "COSANGA",
                            "CUYUJA",
                            "PAPALLACTA",
                            "SAN FRANCISCO DE BORJA (VIRGILIO DÁVILA)",
                            "SAN JOSÉ DEL PAYAMINO",
                            "SUMACO"
                        ]
                    ],
                    [
                        "canton" => "CARLOS JULIO AROSEMENA TOLA",
                        "parroquias" => [
                            "CARLOS JULIO AROSEMENA TOLA"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "PASTAZA",
                "cantones" => [
                    [
                        "canton" => "PASTAZA",
                        "parroquias" => [
                            "PUYO",
                            "ARAJUNO",
                            "CANELOS",
                            "CURARAY",
                            "DIEZ DE AGOSTO",
                            "FÁTIMA",
                            "MONTALVO (ANDOAS)",
                            "POMONA",
                            "RÍO CORRIENTES",
                            "RÍO TIGRE",
                            "SANTA CLARA",
                            "SARAYACU",
                            "SIMÓN BOLÍVAR (CAB. EN MUSHULLACTA)",
                            "TARQUI",
                            "TENIENTE HUGO ORTIZ",
                            "VERACRUZ (INDILLAMA) (CAB. EN INDILLAMA)",
                            "EL TRIUNFO"
                        ]
                    ],
                    [
                        "canton" => "MERA",
                        "parroquias" => [
                            "MERA",
                            "MADRE TIERRA",
                            "SHELL"
                        ]
                    ],
                    [
                        "canton" => "SANTA CLARA",
                        "parroquias" => [
                            "SANTA CLARA",
                            "SAN JOSÉ"
                        ]
                    ],
                    [
                        "canton" => "ARAJUNO",
                        "parroquias" => [
                            "ARAJUNO",
                            "CURARAY"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "PICHINCHA",
                "cantones" => [
                    [
                        "canton" => "QUITO",
                        "parroquias" => [
                            "BELISARIO QUEVEDO",
                            "CARCELÉN",
                            "CENTRO HISTÓRICO",
                            "COCHAPAMBA",
                            "COMITÉ DEL PUEBLO",
                            "COTOCOLLAO",
                            "CHILIBULO",
                            "CHILLOGALLO",
                            "CHIMBACALLE",
                            "EL CONDADO",
                            "GUAMANÍ",
                            "IÑAQUITO",
                            "ITCHIMBÍA",
                            "JIPIJAPA",
                            "KENNEDY",
                            "LA ARGELIA",
                            "LA CONCEPCIÓN",
                            "LA ECUATORIANA",
                            "LA FERROVIARIA",
                            "LA LIBERTAD",
                            "LA MAGDALENA",
                            "LA MENA",
                            "MARISCAL SUCRE",
                            "PONCEANO",
                            "PUENGASÍ",
                            "QUITUMBE",
                            "RUMIPAMBA",
                            "SAN BARTOLO",
                            "SAN ISIDRO DEL INCA",
                            "SAN JUAN",
                            "SOLANDA",
                            "TURUBAMBA",
                            "QUITO DISTRITO METROPOLITANO",
                            "ALANGASÍ",
                            "AMAGUAÑA",
                            "ATAHUALPA",
                            "CALACALÍ",
                            "CALDERÓN",
                            "CONOCOTO",
                            "CUMBAYÁ",
                            "CHAVEZPAMBA",
                            "CHECA",
                            "EL QUINCHE",
                            "GUALEA",
                            "GUANGOPOLO",
                            "GUAYLLABAMBA",
                            "LA MERCED",
                            "LLANO CHICO",
                            "LLOA",
                            "MINDO",
                            "NANEGAL",
                            "NANEGALITO",
                            "NAYÓN",
                            "NONO",
                            "PACTO",
                            "PEDRO VICENTE MALDONADO",
                            "PERUCHO",
                            "PIFO",
                            "PÍNTAG",
                            "POMASQUI",
                            "PUÉLLARO",
                            "PUEMBO",
                            "SAN ANTONIO",
                            "SAN JOSÉ DE MINAS",
                            "SAN MIGUEL DE LOS BANCOS",
                            "TABABELA",
                            "TUMBACO",
                            "YARUQUÍ",
                            "ZAMBIZA",
                            "PUERTO QUITO"
                        ]
                    ],
                    [
                        "canton" => "CAYAMBE",
                        "parroquias" => [
                            "AYORA",
                            "CAYAMBE",
                            "JUAN MONTALVO",
                            "CAYAMBE",
                            "ASCÁZUBI",
                            "CANGAHUA",
                            "OLMEDO (PESILLO)",
                            "OTÓN",
                            "SANTA ROSA DE CUZUBAMBA"
                        ]
                    ],
                    [
                        "canton" => "MEJIA",
                        "parroquias" => [
                            "MACHACHI",
                            "ALÓAG",
                            "ALOASÍ",
                            "CUTUGLAHUA",
                            "EL CHAUPI",
                            "MANUEL CORNEJO ASTORGA (TANDAPI)",
                            "TAMBILLO",
                            "UYUMBICHO"
                        ]
                    ],
                    [
                        "canton" => "PEDRO MONCAYO",
                        "parroquias" => [
                            "TABACUNDO",
                            "LA ESPERANZA",
                            "MALCHINGUÍ",
                            "TOCACHI",
                            "TUPIGACHI"
                        ]
                    ],
                    [
                        "canton" => "RUMIÑAHUI",
                        "parroquias" => [
                            "SANGOLQUÍ",
                            "SAN PEDRO DE TABOADA",
                            "SAN RAFAEL",
                            "SANGOLQUI",
                            "COTOGCHOA",
                            "RUMIPAMBA"
                        ]
                    ],
                    [
                        "canton" => "SAN MIGUEL DE LOS BANCOS",
                        "parroquias" => [
                            "SAN MIGUEL DE LOS BANCOS",
                            "MINDO",
                            "PEDRO VICENTE MALDONADO",
                            "PUERTO QUITO"
                        ]
                    ],
                    [
                        "canton" => "PEDRO VICENTE MALDONADO",
                        "parroquias" => [
                            "PEDRO VICENTE MALDONADO"
                        ]
                    ],
                    [
                        "canton" => "PUERTO QUITO",
                        "parroquias" => [
                            "PUERTO QUITO"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "TUNGURAHUA",
                "cantones" => [
                    [
                        "canton" => "AMBATO",
                        "parroquias" => [
                            "ATOCHA – FICOA",
                            "CELIANO MONGE",
                            "HUACHI CHICO",
                            "HUACHI LORETO",
                            "LA MERCED",
                            "LA PENÍNSULA",
                            "MATRIZ",
                            "PISHILATA",
                            "SAN FRANCISCO",
                            "AMBATO",
                            "AMBATILLO",
                            "ATAHUALPA (CHISALATA)",
                            "AUGUSTO N. MARTÍNEZ (MUNDUGLEO)",
                            "CONSTANTINO FERNÁNDEZ (CAB. EN CULLITAHUA)",
                            "HUACHI GRANDE",
                            "IZAMBA",
                            "JUAN BENIGNO VELA",
                            "MONTALVO",
                            "PASA",
                            "PICAIGUA",
                            "PILAGÜÍN (PILAHÜÍN)",
                            "QUISAPINCHA (QUIZAPINCHA)",
                            "SAN BARTOLOMÉ DE PINLLOG",
                            "SAN FERNANDO (PASA SAN FERNANDO)",
                            "SANTA ROSA",
                            "TOTORAS",
                            "CUNCHIBAMBA",
                            "UNAMUNCHO"
                        ]
                    ],
                    [
                        "canton" => "BAÑOS DE AGUA SANTA",
                        "parroquias" => [
                            "BAÑOS DE AGUA SANTA",
                            "LLIGUA",
                            "RÍO NEGRO",
                            "RÍO VERDE",
                            "ULBA"
                        ]
                    ],
                    [
                        "canton" => "CEVALLOS",
                        "parroquias" => [
                            "CEVALLOS"
                        ]
                    ],
                    [
                        "canton" => "MOCHA",
                        "parroquias" => [
                            "MOCHA",
                            "PINGUILÍ"
                        ]
                    ],
                    [
                        "canton" => "PATATE",
                        "parroquias" => [
                            "PATATE",
                            "EL TRIUNFO",
                            "LOS ANDES (CAB. EN POATUG)",
                            "SUCRE (CAB. EN SUCRE-PATATE URCU)"
                        ]
                    ],
                    [
                        "canton" => "QUERO",
                        "parroquias" => [
                            "QUERO",
                            "RUMIPAMBA",
                            "YANAYACU - MOCHAPATA (CAB. EN YANAYACU)"
                        ]
                    ],
                    [
                        "canton" => "SAN PEDRO DE PELILEO",
                        "parroquias" => [
                            "PELILEO",
                            "PELILEO GRANDE",
                            "PELILEO",
                            "BENÍTEZ (PACHANLICA)",
                            "BOLÍVAR",
                            "COTALÓ",
                            "CHIQUICHA (CAB. EN CHIQUICHA GRANDE)",
                            "EL ROSARIO (RUMICHACA)",
                            "GARCÍA MORENO (CHUMAQUI)",
                            "GUAMBALÓ (HUAMBALÓ)",
                            "SALASACA"
                        ]
                    ],
                    [
                        "canton" => "SANTIAGO DE PÍLLARO",
                        "parroquias" => [
                            "CIUDAD NUEVA",
                            "PÍLLARO",
                            "PÍLLARO",
                            "BAQUERIZO MORENO",
                            "EMILIO MARÍA TERÁN (RUMIPAMBA)",
                            "MARCOS ESPINEL (CHACATA)",
                            "PRESIDENTE URBINA (CHAGRAPAMBA -PATZUCUL)",
                            "SAN ANDRÉS",
                            "SAN JOSÉ DE POALÓ",
                            "SAN MIGUELITO"
                        ]
                    ],
                    [
                        "canton" => "TISALEO",
                        "parroquias" => [
                            "TISALEO",
                            "QUINCHICOTO"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "ZAMORA CHINCHIPE",
                "cantones" => [
                    [
                        "canton" => "ZAMORA",
                        "parroquias" => [
                            "EL LIMÓN",
                            "ZAMORA",
                            "ZAMORA",
                            "CUMBARATZA",
                            "GUADALUPE",
                            "IMBANA (LA VICTORIA DE IMBANA)",
                            "PAQUISHA",
                            "SABANILLA",
                            "TIMBARA",
                            "ZUMBI",
                            "SAN CARLOS DE LAS MINAS"
                        ]
                    ],
                    [
                        "canton" => "CHINCHIPE",
                        "parroquias" => [
                            "ZUMBA",
                            "CHITO",
                            "EL CHORRO",
                            "EL PORVENIR DEL CARMEN",
                            "LA CHONTA",
                            "PALANDA",
                            "PUCAPAMBA",
                            "SAN FRANCISCO DEL VERGEL",
                            "VALLADOLID",
                            "SAN ANDRÉS"
                        ]
                    ],
                    [
                        "canton" => "NANGARITZA",
                        "parroquias" => [
                            "GUAYZIMI",
                            "ZURMI",
                            "NUEVO PARAÍSO"
                        ]
                    ],
                    [
                        "canton" => "YACUAMBI",
                        "parroquias" => [
                            "28 DE MAYO (SAN JOSÉ DE YACUAMBI)",
                            "LA PAZ",
                            "TUTUPALI"
                        ]
                    ],
                    [
                        "canton" => "YANTZAZA (YANZATZA)",
                        "parroquias" => [
                            "YANTZAZA (YANZATZA)",
                            "CHICAÑA",
                            "EL PANGUI",
                            "LOS ENCUENTROS"
                        ]
                    ],
                    [
                        "canton" => "EL PANGUI",
                        "parroquias" => [
                            "EL PANGUI",
                            "EL GUISME",
                            "PACHICUTZA",
                            "TUNDAYME"
                        ]
                    ],
                    [
                        "canton" => "CENTINELA DEL CÓNDOR",
                        "parroquias" => [
                            "ZUMBI",
                            "PAQUISHA",
                            "TRIUNFO-DORADO",
                            "PANGUINTZA"
                        ]
                    ],
                    [
                        "canton" => "PALANDA",
                        "parroquias" => [
                            "PALANDA",
                            "EL PORVENIR DEL CARMEN",
                            "SAN FRANCISCO DEL VERGEL",
                            "VALLADOLID",
                            "LA CANELA"
                        ]
                    ],
                    [
                        "canton" => "PAQUISHA",
                        "parroquias" => [
                            "PAQUISHA",
                            "BELLAVISTA",
                            "NUEVO QUITO"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "GALAPAGOS",
                "cantones" => [
                    [
                        "canton" => "SAN CRISTÓBAL",
                        "parroquias" => [
                            "PUERTO BAQUERIZO MORENO",
                            "EL PROGRESO",
                            "ISLA SANTA MARÍA (FLOREANA) (CAB. EN PTO. VELASCO IBARRA)"
                        ]
                    ],
                    [
                        "canton" => "ISABELA",
                        "parroquias" => [
                            "PUERTO VILLAMIL",
                            "TOMÁS DE BERLANGA (SANTO TOMÁS)"
                        ]
                    ],
                    [
                        "canton" => "SANTA CRUZ",
                        "parroquias" => [
                            "PUERTO AYORA",
                            "BELLAVISTA",
                            "SANTA ROSA (INCLUYE LA ISLA BALTRA)"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "SUCUMBIOS",
                "cantones" => [
                    [
                        "canton" => "LAGO AGRIO",
                        "parroquias" => [
                            "NUEVA LOJA",
                            "CUYABENO",
                            "DURENO",
                            "GENERAL FARFÁN",
                            "TARAPOA",
                            "EL ENO",
                            "PACAYACU",
                            "JAMBELÍ",
                            "SANTA CECILIA",
                            "AGUAS NEGRAS"
                        ]
                    ],
                    [
                        "canton" => "GONZALO PIZARRO",
                        "parroquias" => [
                            "EL DORADO DE CASCALES",
                            "EL REVENTADOR",
                            "GONZALO PIZARRO",
                            "LUMBAQUÍ",
                            "PUERTO LIBRE",
                            "SANTA ROSA DE SUCUMBÍOS"
                        ]
                    ],
                    [
                        "canton" => "PUTUMAYO",
                        "parroquias" => [
                            "PUERTO EL CARMEN DEL PUTUMAYO",
                            "PALMA ROJA",
                            "PUERTO BOLÍVAR (PUERTO MONTÚFAR)",
                            "PUERTO RODRÍGUEZ",
                            "SANTA ELENA"
                        ]
                    ],
                    [
                        "canton" => "SHUSHUFINDI",
                        "parroquias" => [
                            "SHUSHUFINDI",
                            "LIMONCOCHA",
                            "PAÑACOCHA",
                            "SAN ROQUE (CAB. EN SAN VICENTE)",
                            "SAN PEDRO DE LOS COFANES",
                            "SIETE DE JULIO"
                        ]
                    ],
                    [
                        "canton" => "SUCUMBÍOS",
                        "parroquias" => [
                            "LA BONITA",
                            "EL PLAYÓN DE SAN FRANCISCO",
                            "LA SOFÍA",
                            "ROSA FLORIDA",
                            "SANTA BÁRBARA"
                        ]
                    ],
                    [
                        "canton" => "CASCALES",
                        "parroquias" => [
                            "EL DORADO DE CASCALES",
                            "SANTA ROSA DE SUCUMBÍOS",
                            "SEVILLA"
                        ]
                    ],
                    [
                        "canton" => "CUYABENO",
                        "parroquias" => [
                            "TARAPOA",
                            "CUYABENO",
                            "AGUAS NEGRAS"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "ORELLANA",
                "cantones" => [
                    [
                        "canton" => "ORELLANA",
                        "parroquias" => [
                            "PUERTO FRANCISCO DE ORELLANA (EL COCA)",
                            "DAYUMA",
                            "TARACOA (NUEVA ESPERANZA: YUCA)",
                            "ALEJANDRO LABAKA",
                            "EL DORADO",
                            "EL EDÉN",
                            "GARCÍA MORENO",
                            "INÉS ARANGO (CAB. EN WESTERN)",
                            "LA BELLEZA",
                            "NUEVO PARAÍSO (CAB. EN UNIÓN",
                            "SAN JOSÉ DE GUAYUSA",
                            "SAN LUIS DE ARMENIA"
                        ]
                    ],
                    [
                        "canton" => "AGUARICO",
                        "parroquias" => [
                            "TIPITINI",
                            "NUEVO ROCAFUERTE",
                            "CAPITÁN AUGUSTO RIVADENEYRA",
                            "CONONACO",
                            "SANTA MARÍA DE HUIRIRIMA",
                            "TIPUTINI",
                            "YASUNÍ"
                        ]
                    ],
                    [
                        "canton" => "LA JOYA DE LOS SACHAS",
                        "parroquias" => [
                            "LA JOYA DE LOS SACHAS",
                            "ENOKANQUI",
                            "POMPEYA",
                            "SAN CARLOS",
                            "SAN SEBASTIÁN DEL COCA",
                            "LAGO SAN PEDRO",
                            "RUMIPAMBA",
                            "TRES DE NOVIEMBRE",
                            "UNIÓN MILAGREÑA"
                        ]
                    ],
                    [
                        "canton" => "LORETO",
                        "parroquias" => [
                            "LORETO",
                            "AVILA (CAB. EN HUIRUNO)",
                            "PUERTO MURIALDO",
                            "SAN JOSÉ DE PAYAMINO",
                            "SAN JOSÉ DE DAHUANO",
                            "SAN VICENTE DE HUATICOCHA"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "SANTO DOMINGO DE LOS TSACHILAS",
                "cantones" => [
                    [
                        "canton" => "SANTO DOMINGO",
                        "parroquias" => [
                            "ABRAHAM CALAZACÓN",
                            "BOMBOLÍ",
                            "CHIGUILPE",
                            "RÍO TOACHI",
                            "RÍO VERDE",
                            "SANTO DOMINGO DE LOS COLORADOS",
                            "ZARACAY",
                            "SANTO DOMINGO DE LOS COLORADOS",
                            "ALLURIQUÍN",
                            "PUERTO LIMÓN",
                            "LUZ DE AMÉRICA",
                            "SAN JACINTO DEL BÚA",
                            "VALLE HERMOSO",
                            "EL ESFUERZO",
                            "SANTA MARÍA DEL TOACHI"
                        ]
                    ]
                ]
            ],
            [
                "provincia" => "SANTA ELENA",
                "cantones" => [
                    [
                        "canton" => "SANTA ELENA",
                        "parroquias" => [
                            "BALLENITA",
                            "SANTA ELENA",
                            "SANTA ELENA",
                            "ATAHUALPA",
                            "COLONCHE",
                            "CHANDUY",
                            "MANGLARALTO",
                            "SIMÓN BOLÍVAR (JULIO MORENO)",
                            "SAN JOSÉ DE ANCÓN"
                        ]
                    ],
                    [
                        "canton" => "LA LIBERTAD",
                        "parroquias" => [
                            "LA LIBERTAD"
                        ]
                    ],
                    [
                        "canton" => "SALINAS",
                        "parroquias" => [
                            "CARLOS ESPINOZA LARREA",
                            "GRAL. ALBERTO ENRÍQUEZ GALLO",
                            "VICENTE ROCAFUERTE",
                            "SANTA ROSA",
                            "SALINAS",
                            "ANCONCITO",
                            "JOSÉ LUIS TAMAYO (MUEY)"
                        ]
                    ]
                ]
            ],
            [
                "cantones" => [
                    [
                        "canton" => "LAS GOLONDRINAS",
                        "parroquias" => null
                    ],
                    [
                        "canton" => "MANGA DEL CURA",
                        "parroquias" => null
                    ],
                    [
                        "canton" => "EL PIEDRERO",
                        "parroquias" => null
                    ]
                ]
            ]
        ];


        $data = [
            [
                "id" => 1,
                "provincia" => "AZUAY",
                "cantones" => [
                    "CUENCA",
                    "GIRÓN",
                    "GUALACEO",
                    "NABÓN",
                    "PAUTE",
                    "PUCARA",
                    "SAN FERNANDO",
                    "SANTA ISABEL",
                    "SIGSIG",
                    "OÑA",
                    "CHORDELEG",
                    "EL PAN",
                    "SEVILLA DE ORO",
                    "GUACHAPALA",
                    "CAMILO PONCE ENRÍQUEZ"
                ]
            ],
            [
                "id" => 2,
                "provincia" => "BOLIVAR",
                "cantones" => [
                    "GUARANDA",
                    "CHILLANES",
                    "CHIMBO",
                    "ECHEANDÍA",
                    "SAN MIGUEL",
                    "CALUMA",
                    "LAS NAVES"
                ]
            ],
            [
                "id" => 3,
                "provincia" => "CAÑAR",
                "cantones" => [
                    "AZOGUES",
                    "BIBLIÁN",
                    "CAÑAR",
                    "LA TRONCAL",
                    "EL TAMBO",
                    "DÉLEG",
                    "SUSCAL"
                ]
            ],
            [
                "id" => 4,
                "provincia" => "CARCHI",
                "cantones" => [
                    "TULCÁN",
                    "BOLÍVAR",
                    "ESPEJO",
                    "MIRA",
                    "MONTÚFAR",
                    "SAN PEDRO DE HUACA"
                ]
            ],
            [
                "id" => 5,
                "provincia" => "COTOPAXI",
                "cantones" => [
                    "LATACUNGA",
                    "LA MANÁ",
                    "PANGUA",
                    "PUJILI",
                    "SALCEDO",
                    "SAQUISILÍ",
                    "SIGCHOS"
                ]
            ],
            [
                "id" => 6,
                "provincia" => "CHIMBORAZO",
                "cantones" => [
                    "RIOBAMBA",
                    "ALAUSI",
                    "COLTA",
                    "CHAMBO",
                    "CHUNCHI",
                    "GUAMOTE",
                    "GUANO",
                    "PALLATANGA",
                    "PENIPE",
                    "CUMANDÁ"
                ]
            ],
            [
                "id" => 7,
                "provincia" => "EL ORO",
                "cantones" => [
                    "MACHALA",
                    "ARENILLAS",
                    "ATAHUALPA",
                    "BALSAS",
                    "CHILLA",
                    "EL GUABO",
                    "HUAQUILLAS",
                    "MARCABELÍ",
                    "PASAJE",
                    "PIÑAS",
                    "PORTOVELO",
                    "SANTA ROSA",
                    "ZARUMA",
                    "LAS LAJAS"
                ]
            ],
            [
                "id" => 8,
                "provincia" => "ESMERALDAS",
                "cantones" => [
                    "ESMERALDAS",
                    "ELOY ALFARO",
                    "MUISNE",
                    "QUININDÉ",
                    "SAN LORENZO",
                    "ATACAMES",
                    "RIOVERDE",
                    "LA CONCORDIA"
                ]
            ],
            [
                "id" => 9,
                "provincia" => "GUAYAS",
                "cantones" => [
                    "GUAYAQUIL",
                    "ALFREDO BAQUERIZO MORENO (JUJÁN)",
                    "BALAO",
                    "BALZAR",
                    "COLIMES",
                    "DAULE",
                    "DURÁN",
                    "EL EMPALME",
                    "EL TRIUNFO",
                    "MILAGRO",
                    "NARANJAL",
                    "NARANJITO",
                    "PALESTINA",
                    "PEDRO CARBO",
                    "SAMBORONDÓN",
                    "SANTA LUCÍA",
                    "SALITRE (URBINA JADO)",
                    "SAN JACINTO DE YAGUACHI",
                    "PLAYAS",
                    "SIMÓN BOLÍVAR",
                    "CORONEL MARCELINO MARIDUEÑA",
                    "LOMAS DE SARGENTILLO",
                    "NOBOL",
                    "GENERAL ANTONIO ELIZALDE",
                    "ISIDRO AYORA"
                ]
            ],
            [
                "id" => 10,
                "provincia" => "IMBABURA",
                "cantones" => [
                    "IBARRA",
                    "ANTONIO ANTE",
                    "COTACACHI",
                    "OTAVALO",
                    "PIMAMPIRO",
                    "SAN MIGUEL DE URCUQUÍ"
                ]
            ],
            [
                "id" => 11,
                "provincia" => "LOJA",
                "cantones" => [
                    "LOJA",
                    "CALVAS",
                    "CATAMAYO",
                    "CELICA",
                    "CHAGUARPAMBA",
                    "ESPÍNDOLA",
                    "GONZANAMÁ",
                    "MACARÁ",
                    "PALTAS",
                    "PUYANGO",
                    "SARAGURO",
                    "SOZORANGA",
                    "ZAPOTILLO",
                    "PINDAL",
                    "QUILANGA",
                    "OLMEDO"
                ]
            ],
            [
                "id" => 12,
                "provincia" => "LOS RIOS",
                "cantones" => [
                    "BABAHOYO",
                    "BABA",
                    "MONTALVO",
                    "PUEBLOVIEJO",
                    "QUEVEDO",
                    "URDANETA",
                    "VENTANAS",
                    "VÍNCES",
                    "PALENQUE",
                    "BUENA FÉ",
                    "VALENCIA",
                    "MOCACHE",
                    "QUINSALOMA"
                ]
            ],
            [
                "id" => 13,
                "provincia" => "MANABI",
                "cantones" => [
                    "PORTOVIEJO",
                    "BOLÍVAR",
                    "CHONE",
                    "EL CARMEN",
                    "FLAVIO ALFARO",
                    "JIPIJAPA",
                    "JUNÍN",
                    "MANTA",
                    "MONTECRISTI",
                    "PAJÁN",
                    "PICHINCHA",
                    "ROCAFUERTE",
                    "SANTA ANA",
                    "SUCRE",
                    "TOSAGUA",
                    "24 DE MAYO",
                    "PEDERNALES",
                    "OLMEDO",
                    "PUERTO LÓPEZ",
                    "JAMA",
                    "JARAMIJÓ",
                    "SAN VICENTE"
                ]
            ],
            [
                "id" => 14,
                "provincia" => "MORONA SANTIAGO",
                "cantones" => [
                    "MORONA",
                    "GUALAQUIZA",
                    "LIMÓN INDANZA",
                    "PALORA",
                    "SANTIAGO",
                    "SUCÚA",
                    "HUAMBOYA",
                    "SAN JUAN BOSCO",
                    "TAISHA",
                    "LOGROÑO",
                    "PABLO SEXTO",
                    "TIWINTZA"
                ]
            ],
            [
                "id" => 15,
                "provincia" => "NAPO",
                "cantones" => [
                    "TENA",
                    "ARCHIDONA",
                    "EL CHACO",
                    "QUIJOS",
                    "CARLOS JULIO AROSEMENA TOLA"
                ]
            ],
            [
                "id" => 16,
                "provincia" => "PASTAZA",
                "cantones" => [
                    "PASTAZA",
                    "MERA",
                    "SANTA CLARA",
                    "ARAJUNO"
                ]
            ],
            [
                "id" => 17,
                "provincia" => "PICHINCHA",
                "cantones" => [
                    "QUITO",
                    "CAYAMBE",
                    "MEJIA",
                    "PEDRO MONCAYO",
                    "RUMIÑAHUI",
                    "SAN MIGUEL DE LOS BANCOS",
                    "PEDRO VICENTE MALDONADO",
                    "PUERTO QUITO"
                ]
            ],
            [
                "id" => 18,
                "provincia" => "TUNGURAHUA",
                "cantones" => [
                    "AMBATO",
                    "BAÑOS DE AGUA SANTA",
                    "CEVALLOS",
                    "MOCHA",
                    "PATATE",
                    "QUERO",
                    "SAN PEDRO DE PELILEO",
                    "SANTIAGO DE PÍLLARO",
                    "TISALEO"
                ]
            ],
            [
                "id" => 19,
                "provincia" => "ZAMORA CHINCHIPE",
                "cantones" => [
                    "ZAMORA",
                    "CHINCHIPE",
                    "NANGARITZA",
                    "YACUAMBI",
                    "YANTZAZA (YANZATZA)",
                    "EL PANGUI",
                    "CENTINELA DEL CÓNDOR",
                    "PALANDA",
                    "PAQUISHA"
                ]
            ],
            [
                "id" => 20,
                "provincia" => "GALAPAGOS",
                "cantones" => [
                    "SAN CRISTÓBAL",
                    "ISABELA",
                    "SANTA CRUZ"
                ]
            ],
            [
                "id" => 21,
                "provincia" => "SUCUMBIOS",
                "cantones" => [
                    "LAGO AGRIO",
                    "GONZALO PIZARRO",
                    "PUTUMAYO",
                    "SHUSHUFINDI",
                    "SUCUMBÍOS",
                    "CASCALES",
                    "CUYABENO"
                ]
            ],
            [
                "id" => 22,
                "provincia" => "ORELLANA",
                "cantones" => [
                    "ORELLANA",
                    "AGUARICO",
                    "LA JOYA DE LOS SACHAS",
                    "LORETO"
                ]
            ],
            [
                "id" => 23,
                "provincia" => "SANTO DOMINGO DE LOS TSACHILAS",
                "cantones" => [
                    "SANTO DOMINGO"
                ]
            ],
            [
                "id" => 24,
                "provincia" => "SANTA ELENA",
                "cantones" => [
                    "SANTA ELENA",
                    "LA LIBERTAD",
                    "SALINAS"
                ]
            ]
        ];


        foreach ($data as $departmentInfo) {
            $newDepartment = Department::create([
                'name' => $departmentInfo['provincia'],
            ]);
        
            foreach ($departmentInfo['cantones'] as $cityName) {
                $newCity = $newDepartment->cities()->create(['name' => $cityName]);
                
                foreach ($parroquias as $provincia) {
                    foreach ($provincia['cantones'] as $canton) {
                        if ($canton['canton'] === $cityName) {
                            if ($canton['parroquias'] !== null) {
                                foreach ($canton['parroquias'] as $parroquia) {
                                    $newCity->districts()->create(['name' => $parroquia]);
                                }
                            }
                        }
                    }
                }
            }
        }
        
    }
}
