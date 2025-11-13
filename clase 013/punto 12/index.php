<?php
class Pronostico {
    public $fecha;
    public $clima;

    public function __construct($fecha,$clima){
        $this -> fecha = $fecha;
        $this -> clima = $clima;
    }

    public function mostar(){
        echo "Fecha: {$this -> fecha}<br>
        clima: {$this -> clima}<br><br>";
    }
}

$api = file_get_contents("https://wttr.in/Gualeguaychu?format=j1");
$data = json_decode($api);


$actual = new Pronostico($data->current_condition[0]->localObsDateTime, $data->current_condition[0]->weatherDesc[0]->value);
$actual->mostar();
$mañana = new Pronostico($data->weather[0]->date,$data->weather[0]->hourly[0]->weatherDesc[0]->value);
$mañana->mostar();
$pasadoMañana = new Pronostico($data->weather[1]->date,$data->weather[0]->hourly[0]->weatherDesc[0]->value);
$pasadoMañana->mostar();


?>
<!--


{
    "current_condition": [
        {
            "FeelsLikeC": "12",
            "FeelsLikeF": "53",
            "cloudcover": "0",
            "humidity": "88",
            "lang_es": [
                {
                    "value": "Despejado"
                }
            ],
            "localObsDateTime": "2025-08-27 10:53 PM",
            "observation_time": "01:53 AM",
            "precipInches": "0.0",
            "precipMM": "0.0",
            "pressure": "1026",
            "pressureInches": "30",
            "temp_C": "13",
            "temp_F": "55",
            "uvIndex": "0",
            "visibility": "10",
            "visibilityMiles": "6",
            "weatherCode": "113",
            "weatherDesc": [
                {
                    "value": "Clear"
                }
            ],
            "weatherIconUrl": [
                {
                    "value": ""
                }
            ],
            "winddir16Point": "ENE",
            "winddirDegree": "76",
            "windspeedKmph": "13",
            "windspeedMiles": "8"
        }
    ],
    "nearest_area": [
        {
            "areaName": [
                {
                    "value": "Gualeguaychu"
                }
            ],
            "country": [
                {
                    "value": "Argentina"
                }
            ],
            "latitude": "-33.010",
            "longitude": "-58.514",
            "population": "88218",
            "region": [
                {
                    "value": "Entre Rios"
                }
            ],
            "weatherUrl": [
                {
                    "value": ""
                }
            ]
        }
    ],
    "request": [
        {
            "query": "Lat -33.01 and Lon -58.51",
            "type": "LatLon"
        }
    ],
    "weather": [
        {
            "astronomy": [
                {
                    "moon_illumination": "14",
                    "moon_phase": "Waxing Crescent",
                    "moonrise": "09:22 AM",
                    "moonset": "10:54 PM",
                    "sunrise": "07:18 AM",
                    "sunset": "06:34 PM"
                }
            ],
            "avgtempC": "14",
            "avgtempF": "58",
            "date": "2025-08-27",
            "hourly": [
                {
                    "DewPointC": "9",
                    "DewPointF": "47",
                    "FeelsLikeC": "10",
                    "FeelsLikeF": "51",
                    "HeatIndexC": "11",
                    "HeatIndexF": "52",
                    "WindChillC": "10",
                    "WindChillF": "51",
                    "WindGustKmph": "20",
                    "WindGustMiles": "12",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "90",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "87",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "0.0",
                    "humidity": "83",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1026",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "11",
                    "tempF": "52",
                    "time": "0",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "66",
                    "windspeedKmph": "9",
                    "windspeedMiles": "6"
                },
                {
                    "DewPointC": "8",
                    "DewPointF": "47",
                    "FeelsLikeC": "9",
                    "FeelsLikeF": "48",
                    "HeatIndexC": "10",
                    "HeatIndexF": "50",
                    "WindChillC": "9",
                    "WindChillF": "48",
                    "WindGustKmph": "19",
                    "WindGustMiles": "12",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "89",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "92",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "0.0",
                    "humidity": "88",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1026",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "10",
                    "tempF": "50",
                    "time": "300",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "54",
                    "windspeedKmph": "9",
                    "windspeedMiles": "6"
                },
                {
                    "DewPointC": "8",
                    "DewPointF": "46",
                    "FeelsLikeC": "8",
                    "FeelsLikeF": "47",
                    "HeatIndexC": "9",
                    "HeatIndexF": "49",
                    "WindChillC": "8",
                    "WindChillF": "47",
                    "WindGustKmph": "17",
                    "WindGustMiles": "11",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "80",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "85",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "0.0",
                    "humidity": "88",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1027",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "9",
                    "tempF": "49",
                    "time": "600",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "59",
                    "windspeedKmph": "8",
                    "windspeedMiles": "5"
                },
                {
                    "DewPointC": "9",
                    "DewPointF": "48",
                    "FeelsLikeC": "12",
                    "FeelsLikeF": "53",
                    "HeatIndexC": "13",
                    "HeatIndexF": "55",
                    "WindChillC": "12",
                    "WindChillF": "53",
                    "WindGustKmph": "16",
                    "WindGustMiles": "10",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "92",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "92",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "8.7",
                    "humidity": "77",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1028",
                    "pressureInches": "30",
                    "shortRad": "36.2",
                    "tempC": "13",
                    "tempF": "55",
                    "time": "900",
                    "uvIndex": "1",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "54",
                    "windspeedKmph": "10",
                    "windspeedMiles": "6"
                },
                {
                    "DewPointC": "11",
                    "DewPointF": "52",
                    "FeelsLikeC": "19",
                    "FeelsLikeF": "66",
                    "HeatIndexC": "19",
                    "HeatIndexF": "66",
                    "WindChillC": "19",
                    "WindChillF": "66",
                    "WindGustKmph": "13",
                    "WindGustMiles": "8",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "82",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "92",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "66.6",
                    "humidity": "59",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1027",
                    "pressureInches": "30",
                    "shortRad": "545.3",
                    "tempC": "19",
                    "tempF": "66",
                    "time": "1200",
                    "uvIndex": "5",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "50",
                    "windspeedKmph": "12",
                    "windspeedMiles": "7"
                },
                {
                    "DewPointC": "10",
                    "DewPointF": "50",
                    "FeelsLikeC": "21",
                    "FeelsLikeF": "70",
                    "HeatIndexC": "24",
                    "HeatIndexF": "76",
                    "WindChillC": "21",
                    "WindChillF": "70",
                    "WindGustKmph": "10",
                    "WindGustMiles": "6",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "85",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "92",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "70.0",
                    "humidity": "50",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1025",
                    "pressureInches": "30",
                    "shortRad": "630.3",
                    "tempC": "21",
                    "tempF": "70",
                    "time": "1500",
                    "uvIndex": "4",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "47",
                    "windspeedKmph": "9",
                    "windspeedMiles": "5"
                },
                {
                    "DewPointC": "11",
                    "DewPointF": "52",
                    "FeelsLikeC": "18",
                    "FeelsLikeF": "64",
                    "HeatIndexC": "18",
                    "HeatIndexF": "64",
                    "WindChillC": "18",
                    "WindChillF": "64",
                    "WindGustKmph": "13",
                    "WindGustMiles": "8",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "84",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "89",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "53.9",
                    "humidity": "65",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1025",
                    "pressureInches": "30",
                    "shortRad": "353.5",
                    "tempC": "18",
                    "tempF": "64",
                    "time": "1800",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "61",
                    "windspeedKmph": "6",
                    "windspeedMiles": "4"
                },
                {
                    "DewPointC": "11",
                    "DewPointF": "52",
                    "FeelsLikeC": "13",
                    "FeelsLikeF": "55",
                    "HeatIndexC": "14",
                    "HeatIndexF": "57",
                    "WindChillC": "13",
                    "WindChillF": "55",
                    "WindGustKmph": "24",
                    "WindGustMiles": "15",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "89",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "89",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "27.9",
                    "humidity": "83",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1026",
                    "pressureInches": "30",
                    "shortRad": "178.9",
                    "tempC": "14",
                    "tempF": "57",
                    "time": "2100",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "75",
                    "windspeedKmph": "12",
                    "windspeedMiles": "7"
                }
            ],
            "maxtempC": "21",
            "maxtempF": "70",
            "mintempC": "9",
            "mintempF": "48",
            "sunHour": "11.0",
            "totalSnow_cm": "0.0",
            "uvIndex": "1"
        },
        {
            "astronomy": [
                {
                    "moon_illumination": "21",
                    "moon_phase": "Waxing Crescent",
                    "moonrise": "09:49 AM",
                    "moonset": "11:52 PM",
                    "sunrise": "07:16 AM",
                    "sunset": "06:34 PM"
                }
            ],
            "avgtempC": "15",
            "avgtempF": "59",
            "date": "2025-08-28",
            "hourly": [
                {
                    "DewPointC": "11",
                    "DewPointF": "51",
                    "FeelsLikeC": "11",
                    "FeelsLikeF": "51",
                    "HeatIndexC": "12",
                    "HeatIndexF": "53",
                    "WindChillC": "11",
                    "WindChillF": "51",
                    "WindGustKmph": "24",
                    "WindGustMiles": "15",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "83",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "86",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "0.0",
                    "humidity": "92",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1026",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "12",
                    "tempF": "53",
                    "time": "0",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "59",
                    "windspeedKmph": "12",
                    "windspeedMiles": "7"
                },
                {
                    "DewPointC": "9",
                    "DewPointF": "49",
                    "FeelsLikeC": "9",
                    "FeelsLikeF": "49",
                    "HeatIndexC": "11",
                    "HeatIndexF": "51",
                    "WindChillC": "9",
                    "WindChillF": "49",
                    "WindGustKmph": "23",
                    "WindGustMiles": "14",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "83",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "91",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "0",
                    "diffRad": "0.0",
                    "humidity": "92",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1025",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "11",
                    "tempF": "51",
                    "time": "300",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "53",
                    "windspeedKmph": "11",
                    "windspeedMiles": "7"
                },
                {
                    "DewPointC": "9",
                    "DewPointF": "48",
                    "FeelsLikeC": "8",
                    "FeelsLikeF": "47",
                    "HeatIndexC": "10",
                    "HeatIndexF": "50",
                    "WindChillC": "8",
                    "WindChillF": "47",
                    "WindGustKmph": "21",
                    "WindGustMiles": "13",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "80",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "90",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "1",
                    "diffRad": "0.0",
                    "humidity": "93",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1025",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "10",
                    "tempF": "50",
                    "time": "600",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "52",
                    "windspeedKmph": "10",
                    "windspeedMiles": "6"
                },
                {
                    "DewPointC": "10",
                    "DewPointF": "51",
                    "FeelsLikeC": "12",
                    "FeelsLikeF": "54",
                    "HeatIndexC": "13",
                    "HeatIndexF": "56",
                    "WindChillC": "12",
                    "WindChillF": "54",
                    "WindGustKmph": "15",
                    "WindGustMiles": "10",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "88",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "93",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "5",
                    "diffRad": "9.1",
                    "humidity": "83",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1026",
                    "pressureInches": "30",
                    "shortRad": "37.1",
                    "tempC": "13",
                    "tempF": "56",
                    "time": "900",
                    "uvIndex": "1",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "63",
                    "windspeedKmph": "11",
                    "windspeedMiles": "7"
                },
                {
                    "DewPointC": "12",
                    "DewPointF": "54",
                    "FeelsLikeC": "19",
                    "FeelsLikeF": "67",
                    "HeatIndexC": "19",
                    "HeatIndexF": "67",
                    "WindChillC": "19",
                    "WindChillF": "67",
                    "WindGustKmph": "15",
                    "WindGustMiles": "9",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "89",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "86",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "4",
                    "diffRad": "69.0",
                    "humidity": "64",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1024",
                    "pressureInches": "30",
                    "shortRad": "549.6",
                    "tempC": "19",
                    "tempF": "67",
                    "time": "1200",
                    "uvIndex": "5",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "56",
                    "windspeedKmph": "13",
                    "windspeedMiles": "8"
                },
                {
                    "DewPointC": "13",
                    "DewPointF": "55",
                    "FeelsLikeC": "22",
                    "FeelsLikeF": "71",
                    "HeatIndexC": "24",
                    "HeatIndexF": "76",
                    "WindChillC": "22",
                    "WindChillF": "71",
                    "WindGustKmph": "16",
                    "WindGustMiles": "10",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "82",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "90",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "13",
                    "diffRad": "72.7",
                    "humidity": "56",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1021",
                    "pressureInches": "30",
                    "shortRad": "633.3",
                    "tempC": "22",
                    "tempF": "71",
                    "time": "1500",
                    "uvIndex": "4",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "57",
                    "windspeedKmph": "14",
                    "windspeedMiles": "9"
                },
                {
                    "DewPointC": "14",
                    "DewPointF": "57",
                    "FeelsLikeC": "19",
                    "FeelsLikeF": "66",
                    "HeatIndexC": "19",
                    "HeatIndexF": "66",
                    "WindChillC": "19",
                    "WindChillF": "66",
                    "WindGustKmph": "19",
                    "WindGustMiles": "12",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "31",
                    "chanceofrain": "0",
                    "chanceofremdry": "90",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "84",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "28",
                    "diffRad": "56.2",
                    "humidity": "74",
                    "lang_es": [
                        {
                            "value": "Parcialmente nublado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1019",
                    "pressureInches": "30",
                    "shortRad": "353.8",
                    "tempC": "19",
                    "tempF": "66",
                    "time": "1800",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "116",
                    "weatherDesc": [
                        {
                            "value": "Partly Cloudy "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "E",
                    "winddirDegree": "80",
                    "windspeedKmph": "10",
                    "windspeedMiles": "6"
                },
                {
                    "DewPointC": "14",
                    "DewPointF": "56",
                    "FeelsLikeC": "14",
                    "FeelsLikeF": "57",
                    "HeatIndexC": "15",
                    "HeatIndexF": "58",
                    "WindChillC": "14",
                    "WindChillF": "57",
                    "WindGustKmph": "28",
                    "WindGustMiles": "17",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "43",
                    "chanceofrain": "0",
                    "chanceofremdry": "82",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "75",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "27",
                    "diffRad": "29.1",
                    "humidity": "93",
                    "lang_es": [
                        {
                            "value": "Parcialmente nublado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1021",
                    "pressureInches": "30",
                    "shortRad": "179.1",
                    "tempC": "15",
                    "tempF": "58",
                    "time": "2100",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "116",
                    "weatherDesc": [
                        {
                            "value": "Partly Cloudy "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "E",
                    "winddirDegree": "88",
                    "windspeedKmph": "13",
                    "windspeedMiles": "8"
                }
            ],
            "maxtempC": "22",
            "maxtempF": "71",
            "mintempC": "10",
            "mintempF": "49",
            "sunHour": "11.0",
            "totalSnow_cm": "0.0",
            "uvIndex": "1"
        },
        {
            "astronomy": [
                {
                    "moon_illumination": "29",
                    "moon_phase": "Waxing Crescent",
                    "moonrise": "10:19 AM",
                    "moonset": "No moonset",
                    "sunrise": "07:15 AM",
                    "sunset": "06:35 PM"
                }
            ],
            "avgtempC": "17",
            "avgtempF": "63",
            "date": "2025-08-29",
            "hourly": [
                {
                    "DewPointC": "13",
                    "DewPointF": "56",
                    "FeelsLikeC": "13",
                    "FeelsLikeF": "55",
                    "HeatIndexC": "14",
                    "HeatIndexF": "58",
                    "WindChillC": "13",
                    "WindChillF": "55",
                    "WindGustKmph": "34",
                    "WindGustMiles": "21",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "94",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "92",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "18",
                    "diffRad": "0.0",
                    "humidity": "94",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1019",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "14",
                    "tempF": "58",
                    "time": "0",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "64",
                    "windspeedKmph": "18",
                    "windspeedMiles": "11"
                },
                {
                    "DewPointC": "12",
                    "DewPointF": "54",
                    "FeelsLikeC": "12",
                    "FeelsLikeF": "53",
                    "HeatIndexC": "13",
                    "HeatIndexF": "55",
                    "WindChillC": "12",
                    "WindChillF": "53",
                    "WindGustKmph": "22",
                    "WindGustMiles": "14",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "83",
                    "chanceofrain": "0",
                    "chanceofremdry": "93",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "9",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "13",
                    "diffRad": "0.0",
                    "humidity": "96",
                    "lang_es": [
                        {
                            "value": "Neblina"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1018",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "13",
                    "tempF": "55",
                    "time": "300",
                    "uvIndex": "0",
                    "visibility": "2",
                    "visibilityMiles": "1",
                    "weatherCode": "143",
                    "weatherDesc": [
                        {
                            "value": "Mist"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "63",
                    "windspeedKmph": "10",
                    "windspeedMiles": "6"
                },
                {
                    "DewPointC": "12",
                    "DewPointF": "54",
                    "FeelsLikeC": "11",
                    "FeelsLikeF": "52",
                    "HeatIndexC": "13",
                    "HeatIndexF": "55",
                    "WindChillC": "11",
                    "WindChillF": "52",
                    "WindGustKmph": "27",
                    "WindGustMiles": "17",
                    "chanceoffog": "1",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "32",
                    "chanceofrain": "0",
                    "chanceofremdry": "92",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "72",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "33",
                    "diffRad": "0.0",
                    "humidity": "97",
                    "lang_es": [
                        {
                            "value": "Parcialmente nublado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1017",
                    "pressureInches": "30",
                    "shortRad": "0.0",
                    "tempC": "13",
                    "tempF": "55",
                    "time": "600",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "116",
                    "weatherDesc": [
                        {
                            "value": "Partly Cloudy "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "76",
                    "windspeedKmph": "13",
                    "windspeedMiles": "8"
                },
                {
                    "DewPointC": "13",
                    "DewPointF": "56",
                    "FeelsLikeC": "16",
                    "FeelsLikeF": "60",
                    "HeatIndexC": "16",
                    "HeatIndexF": "60",
                    "WindChillC": "16",
                    "WindChillF": "60",
                    "WindGustKmph": "26",
                    "WindGustMiles": "16",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "84",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "85",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "19",
                    "diffRad": "10.1",
                    "humidity": "86",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1018",
                    "pressureInches": "30",
                    "shortRad": "36.9",
                    "tempC": "16",
                    "tempF": "60",
                    "time": "900",
                    "uvIndex": "1",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "61",
                    "windspeedKmph": "20",
                    "windspeedMiles": "12"
                },
                {
                    "DewPointC": "15",
                    "DewPointF": "59",
                    "FeelsLikeC": "21",
                    "FeelsLikeF": "70",
                    "HeatIndexC": "24",
                    "HeatIndexF": "76",
                    "WindChillC": "21",
                    "WindChillF": "70",
                    "WindGustKmph": "25",
                    "WindGustMiles": "15",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "30",
                    "chanceofrain": "0",
                    "chanceofremdry": "91",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "82",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "58",
                    "diffRad": "78.9",
                    "humidity": "67",
                    "lang_es": [
                        {
                            "value": "Parcialmente nublado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1017",
                    "pressureInches": "30",
                    "shortRad": "543.4",
                    "tempC": "21",
                    "tempF": "70",
                    "time": "1200",
                    "uvIndex": "5",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "116",
                    "weatherDesc": [
                        {
                            "value": "Partly Cloudy "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "48",
                    "windspeedKmph": "22",
                    "windspeedMiles": "13"
                },
                {
                    "DewPointC": "15",
                    "DewPointF": "58",
                    "FeelsLikeC": "25",
                    "FeelsLikeF": "77",
                    "HeatIndexC": "25",
                    "HeatIndexF": "77",
                    "WindChillC": "24",
                    "WindChillF": "75",
                    "WindGustKmph": "25",
                    "WindGustMiles": "16",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "10",
                    "chanceofovercast": "40",
                    "chanceofrain": "0",
                    "chanceofremdry": "92",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "81",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "39",
                    "diffRad": "87.6",
                    "humidity": "57",
                    "lang_es": [
                        {
                            "value": "Parcialmente nublado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1014",
                    "pressureInches": "30",
                    "shortRad": "625.7",
                    "tempC": "24",
                    "tempF": "75",
                    "time": "1500",
                    "uvIndex": "3",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "116",
                    "weatherDesc": [
                        {
                            "value": "Partly Cloudy "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "NE",
                    "winddirDegree": "51",
                    "windspeedKmph": "21",
                    "windspeedMiles": "13"
                },
                {
                    "DewPointC": "16",
                    "DewPointF": "60",
                    "FeelsLikeC": "21",
                    "FeelsLikeF": "69",
                    "HeatIndexC": "21",
                    "HeatIndexF": "69",
                    "WindChillC": "21",
                    "WindChillF": "69",
                    "WindGustKmph": "26",
                    "WindGustMiles": "16",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "88",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "89",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "2",
                    "diffRad": "57.7",
                    "humidity": "72",
                    "lang_es": [
                        {
                            "value": "Soleado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1013",
                    "pressureInches": "30",
                    "shortRad": "354.5",
                    "tempC": "21",
                    "tempF": "69",
                    "time": "1800",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Sunny"
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "ENE",
                    "winddirDegree": "73",
                    "windspeedKmph": "14",
                    "windspeedMiles": "9"
                },
                {
                    "DewPointC": "15",
                    "DewPointF": "60",
                    "FeelsLikeC": "17",
                    "FeelsLikeF": "62",
                    "HeatIndexC": "17",
                    "HeatIndexF": "62",
                    "WindChillC": "17",
                    "WindChillF": "62",
                    "WindGustKmph": "34",
                    "WindGustMiles": "21",
                    "chanceoffog": "0",
                    "chanceoffrost": "0",
                    "chanceofhightemp": "0",
                    "chanceofovercast": "0",
                    "chanceofrain": "0",
                    "chanceofremdry": "82",
                    "chanceofsnow": "0",
                    "chanceofsunshine": "93",
                    "chanceofthunder": "0",
                    "chanceofwindy": "0",
                    "cloudcover": "5",
                    "diffRad": "29.9",
                    "humidity": "92",
                    "lang_es": [
                        {
                            "value": "Despejado"
                        }
                    ],
                    "precipInches": "0.0",
                    "precipMM": "0.0",
                    "pressure": "1015",
                    "pressureInches": "30",
                    "shortRad": "179.6",
                    "tempC": "17",
                    "tempF": "62",
                    "time": "2100",
                    "uvIndex": "0",
                    "visibility": "10",
                    "visibilityMiles": "6",
                    "weatherCode": "113",
                    "weatherDesc": [
                        {
                            "value": "Clear "
                        }
                    ],
                    "weatherIconUrl": [
                        {
                            "value": ""
                        }
                    ],
                    "winddir16Point": "E",
                    "winddirDegree": "91",
                    "windspeedKmph": "17",
                    "windspeedMiles": "11"
                }
            ],
            "maxtempC": "24",
            "maxtempF": "75",
            "mintempC": "13",
            "mintempF": "55",
            "sunHour": "10.8",
            "totalSnow_cm": "0.0",
            "uvIndex": "1"
        }
    ]
}
-->