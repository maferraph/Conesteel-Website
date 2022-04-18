<?
//Massa:
function ToSI_Mass($mass, $massUnit)
{
  if      ($massUnit == "carat (metric)")       return $mass * 0.0002;
  else if ($massUnit == "Earth mass")           return $mass * 5.980e24;
  else if ($massUnit == "gr�o")                 return $mass * 0.00006479891;
  else if ($massUnit == "grama [g]")            return $mass * 1e-3;
  else if ($massUnit == "hudredweight (long)")  return $mass * 50.80234544;
  else if ($massUnit == "hudredweight (short)") return $mass * 45.359237;
  else if ($massUnit == "quilograma [kg]")      return $mass * 1;
  else if ($massUnit == "on�a (avoirdupois)")   return $mass * 0.028349523125;
  else if ($massUnit == "on�a (troy)")          return $mass * 0.0311034768;
  else if ($massUnit == "libra (avoirdupois)")  return $mass * 0.45359237;
  else if ($massUnit == "libra (troy)")         return $mass * 0.3732417216;
  else if ($massUnit == "Solar mass")           return $mass * 1.989e30;
  else if ($massUnit == "slug (g-pound)")       return $mass * 14.593903;
  else if ($massUnit == "stone")                return $mass * 6.35029318;
  else if ($massUnit == "ton (UK or long)")     return $mass * 1016.0469088;
  else if ($massUnit == "ton (US or short)")    return $mass * 907.18474;
  else if ($massUnit == "tonelada")             return $mass * 1000;
  else {
        return 0;
  }
}

function FromSI_Mass($mass, $massUnit)
{
  if      ($massUnit == "carat (metric)")       return $mass / 0.0002;
  else if ($massUnit == "Earth mass")           return $mass / 5.980e24;
  else if ($massUnit == "gr�o")                 return $mass / 0.00006479891;
  else if ($massUnit == "grama [g]")            return $mass / 1e-3;
  else if ($massUnit == "hudredweight (long)")  return $mass / 50.80234544;
  else if ($massUnit == "hudredweight (short)") return $mass / 45.359237;
  else if ($massUnit == "quilograma [kg]")      return $mass / 1;
  else if ($massUnit == "on�a (avoirdupois)")   return $mass / 0.028349523125;
  else if ($massUnit == "on�a (troy)")          return $mass / 0.0311034768;
  else if ($massUnit == "libra (avoirdupois)")  return $mass / 0.45359237;
  else if ($massUnit == "libra (troy)")         return $mass / 0.3732417216;
  else if ($massUnit == "Solar mass")           return $mass / 1.989e30;
  else if ($massUnit == "slug (g-pound)")       return $mass / 14.593903;
  else if ($massUnit == "stone")                return $mass / 6.35029318;
  else if ($massUnit == "ton (UK or long)")     return $mass / 1016.0469088;
  else if ($massUnit == "ton (US or short)")    return $mass / 907.18474;
  else if ($massUnit == "tonelada")             return $mass / 1000;
  else {
    return 0;
  }
}

//echo FromSI_Mass(50, "carat (metric)");
//�rea
function ToSI_Area($area, $areaUnit)
{
  if      ($areaUnit == "acre")                 return $area * 4046.8564224;
  else if ($areaUnit == "are")                  return $area * 100;
  else if ($areaUnit == "circular inch")        return $area * 0.000506707479;
  else if ($areaUnit == "hectare")              return $area * 1e4;
  else if ($areaUnit == "hide")                 return $area * 485000;
  else if ($areaUnit == "rood")                 return $area * 1011.7141056;
  else if ($areaUnit == "cent�metro quadrado")  return $area * 1e-4;
  else if ($areaUnit == "p� quadrado")          return $area *  0.09290304;
  else if ($areaUnit == "p� quadrado (US survey)") return $area * 0.092903411613;
  else if ($areaUnit == "polegada quadrada")    return $area * 0.00064516;
  else if ($areaUnit == "quil�metro quadrado")  return $area * 1e6;
  else if ($areaUnit == "metro quadrado")       return $area * 1;
  else if ($areaUnit == "milha quadrada")       return $area * 2589988.110336;
  else if ($areaUnit == "mil�metro quadrado")   return $area * 1e-6;
  else if ($areaUnit == "square (of timber)")   return $area * 9.290304;
  else if ($areaUnit == "square rods (or poles)") return $area * 25.29285264;
  else if ($areaUnit == "jarda quadrada")       return $area * 0.83612736;
  else if ($areaUnit == "township")             return $area * 93239571.972;
  else {
    return 0;
  }
}

function FromSI_Area($area, $areaUnit)
{
  if      ($areaUnit == "acre")                   return $area / 4046.8564224;
  else if ($areaUnit == "are")                    return $area / 100;
  else if ($areaUnit == "circular inch")          return $area / 0.000506707479;
  else if ($areaUnit == "hectare")                return $area / 1e4;
  else if ($areaUnit == "hide")                   return $area / 485000;
  else if ($areaUnit == "rood")                   return $area / 1011.7141056;
  else if ($areaUnit == "cent�metro quadrado")    return $area / 1e-4;
  else if ($areaUnit == "p� quadrado")            return $area /  0.09290304;
  else if ($areaUnit == "p� quadrado (US survey)")return $area / 0.092903411613;
  else if ($areaUnit == "polegada quadrada")      return $area / 0.00064516;
  else if ($areaUnit == "quil�metro quadrado")    return $area / 1e6;
  else if ($areaUnit == "metro quadrado")         return $area / 1;
  else if ($areaUnit == "milha quadrada")         return $area / 2589988.110336;
  else if ($areaUnit == "mil�metro quadrado")     return $area / 1e-6;
  else if ($areaUnit == "square (of timber)")     return $area / 9.290304;
  else if ($areaUnit == "square rods (or poles)") return $area / 25.29285264;
  else if ($areaUnit == "jarda quadrada")         return $area / 0.83612736;
  else if ($areaUnit == "township")               return $area / 93239571.972;
  else {
    return 0;
  }
}

//Dist�ncia :
function ToSI_Dist($length, $lengthUnit)
{
  if      ($lengthUnit == "�ngstr�m [�]")            return $length * 1e-10;
  else if ($lengthUnit == "astronomical unit [AU]")  return $length * 149598550000;
  else if ($lengthUnit == "barleycorn")              return $length * 0.008467;
  else if ($lengthUnit == "cable")                   return $length * 182.88;
  else if ($lengthUnit == "cent�metro [cm]")         return $length * 0.01;
  else if ($lengthUnit == "chain (surveyors')")      return $length * 20.1168;
  else if ($lengthUnit == "dec�metro [dm]")          return $length * 0.1;
  else if ($lengthUnit == "ells (UK)")               return $length * 0.875;
  else if ($lengthUnit == "ems (pica)")              return $length * 0.0042333;
  else if ($lengthUnit == "bra�a")                   return $length * 1.8288;
  else if ($lengthUnit == "p� (UK e US)")            return $length * 0.3048;
  else if ($lengthUnit == "p� (US survey)")          return $length * 0.304800609601219202438;
  else if ($lengthUnit == "furlong")                 return $length * 201.168;
  else if ($lengthUnit == "hand")                    return $length * 0.106;
  else if ($lengthUnit == "hect�metro [hm]")         return $length * 100;
  else if ($lengthUnit == "polegada")                return $length * 0.0254;
  else if ($lengthUnit == "quil�metro [km]")         return $length * 1000;
  else if ($lengthUnit == "anos luz")                return $length * 9.4605e15;
  else if ($lengthUnit == "metro [m]")               return $length * 1;
  else if ($lengthUnit == "micrometro")              return $length * 1e-6;
  else if ($lengthUnit == "milha (UK e US)")         return $length * 1609.344;
  else if ($lengthUnit == "milha (nautical)")        return $length * 1852;
  else if ($lengthUnit == "mil�metro [mm]")          return $length * 0.001;
  else if ($lengthUnit == "nan�metro")               return $length * 1e-9;
  else if ($lengthUnit == "parsec")                  return $length * 3.085677e16;
  else if ($lengthUnit == "picometro")               return $length * 1e-12;
  else if ($lengthUnit == "jarda")                   return $length * 0.9144;
  else {
    return 0;
  }
}

function FromSI_Dist($length, $lengthUnit)
{
  if      ($lengthUnit == "�ngstr�m [�]")            return $length / 1e-10;
  else if ($lengthUnit == "astronomical unit [AU]")  return $length / 149598550000;
  else if ($lengthUnit == "barleycorn")              return $length / 0.008467;
  else if ($lengthUnit == "cable")                   return $length / 182.88;
  else if ($lengthUnit == "cent�metro [cm]")         return $length / 0.01;
  else if ($lengthUnit == "chain (surveyors')")      return $length / 20.1168;
  else if ($lengthUnit == "dec�metro [dm]")          return $length / 0.1;
  else if ($lengthUnit == "ells (UK)")               return $length / 0.875;
  else if ($lengthUnit == "ems (pica)")              return $length / 0.0042333;
  else if ($lengthUnit == "bra�a")                   return $length / 1.8288;
  else if ($lengthUnit == "p� (UK e US)")            return $length / 0.3048;
  else if ($lengthUnit == "p� (US survey)")          return $length / 0.304800609601219202438;
  else if ($lengthUnit == "furlong")                 return $length / 201.168;
  else if ($lengthUnit == "hand")                    return $length / 0.106;
  else if ($lengthUnit == "hect�metro [hm]")         return $length / 100;
  else if ($lengthUnit == "polegada")                return $length / 0.0254;
  else if ($lengthUnit == "quil�metro [km]")         return $length / 1000;
  else if ($lengthUnit == "anos luz")                return $length / 9.4605e15;
  else if ($lengthUnit == "metro [m]")               return $length / 1;
  else if ($lengthUnit == "micrometro")              return $length / 1e-6;
  else if ($lengthUnit == "milha (UK e US)")         return $length / 1609.344;
  else if ($lengthUnit == "milha (nautical)")        return $length / 1852;
  else if ($lengthUnit == "mil�metro [mm]")          return $length / 0.001;
  else if ($lengthUnit == "nan�metro")               return $length / 1e-9;
  else if ($lengthUnit == "parsec")                  return $length / 3.085677e16;
  else if ($lengthUnit == "picometro")               return $length / 1e-12;
  else if ($lengthUnit == "jarda")                   return $length / 0.9144;
  else {
    return 0;
  }
}

//For�a:

function ToSI_Forca($force, $forceUnit)
{
  if      ($forceUnit == "dyne")                     return $force * 0.00001;
  else if ($forceUnit == "quilograma for�a")         return $force * 9.80665;
  else if ($forceUnit == "quilonewton [kN]")         return $force * 1000;
  else if ($forceUnit == "kip")                      return $force * 4448.222;
  else if ($forceUnit == "meganewton [MN]")          return $force * 1e6;
  else if ($forceUnit == "newton [N]")               return $force * 1;
  else if ($forceUnit == "libra for�a")              return $force * 4.448222;
  else if ($forceUnit == "poundal")                  return $force * 0.138255;
  else if ($forceUnit == "sthene (=kN)")             return $force * 1000;
  else if ($forceUnit == "tonelada for�a")           return $force * 9806.65;
  else if ($forceUnit == "ton force (UK)")           return $force * 9964.016;
  else if ($forceUnit == "ton force (US)")           return $force * 8896.443;
  else {
    return 0;
  }
}

function FromSI_Forca($force, $forceUnit)
{
  if      ($forceUnit == "dyne")                     return $force / 0.00001;
  else if ($forceUnit == "quilograma for�a")         return $force / 9.80665;
  else if ($forceUnit == "quilonewton [kN]")         return $force / 1000;
  else if ($forceUnit == "kip")                      return $force / 4448.222;
  else if ($forceUnit == "meganewton [MN]")          return $force / 1e6;
  else if ($forceUnit == "newton [N]")               return $force / 1;
  else if ($forceUnit == "libra for�a")              return $force / 4.448222;
  else if ($forceUnit == "poundal")                  return $force / 0.138255;
  else if ($forceUnit == "sthene (=kN)")             return $force / 1000;
  else if ($forceUnit == "tonelada for�a")           return $force / 9806.65;
  else if ($forceUnit == "ton force (UK)")           return $force / 9964.016;
  else if ($forceUnit == "ton force (US)")           return $force / 8896.443;
  else {
    return 0;
  }
}

//Pot�ncia:
function ToSI_Poten($power, $powerUnit)
{
  if      ($powerUnit == "Btu/hora")                 return $power * 0.293071;
  else if ($powerUnit == "Btu/minuto")               return $power * 17.584267;
  else if ($powerUnit == "Btu/segundo")              return $power * 1055.056;
  else if ($powerUnit == "caloria(th)/hora")         return $power * 0.001162222222222222;
  else if ($powerUnit == "caloria(th)/minuto")       return $power * 0.06973333333333333;
  else if ($powerUnit == "caloria(th)/segundo")      return $power * 4.184;
  else if ($powerUnit == "foot pound-force/minute")  return $power * 0.022597;
  else if ($powerUnit == "foot pound-force/second")  return $power * 1.35582;
  else if ($powerUnit == "gigawatt [GW]")            return $power * 1e9;
  else if ($powerUnit == "horsepower (electric)")    return $power * 746;
  else if ($powerUnit == "horsepower (metric)")      return $power * 735.499;
  else if ($powerUnit == "watt [W]")                 return $power * 1;
  else if ($powerUnit == "joule/hora")               return $power * 0.0002777777777777778;
  else if ($powerUnit == "joule/minuto")             return $power * 0.016666666666666666;
  else if ($powerUnit == "joule/segundo")            return $power * 1;
  else if ($powerUnit == "quilocaloria(th)/hora")    return $power * 1.1622222222222222;
  else if ($powerUnit == "quilocaloria(th)/minuto")  return $power * 69.73333333333333;
  else if ($powerUnit == "quilograma-for�a metro/hora")  return $power * 0.002724;
  else if ($powerUnit == "quilograma-for�a metro/minuto") return $power * 0.163444;
  else if ($powerUnit == "quilowatt [kW]")           return $power * 1e3;
  else if ($powerUnit == "megawatt [MW]")            return $power * 1e6;
  else {
    return 0;
  }
}

function FromSI_Poten($power, $powerUnit)
{
  if      ($powerUnit == "Btu/hora")                      return $power / 0.293071;
  else if ($powerUnit == "Btu/minuto")                    return $power / 17.584267;
  else if ($powerUnit == "Btu/segundo")                   return $power / 1055.056;
  else if ($powerUnit == "caloria(th)/hora")              return $power / 0.001162222222222222;
  else if ($powerUnit == "caloria(th)/minuto")            return $power / 0.06973333333333333;
  else if ($powerUnit == "caloria(th)/segundo")           return $power / 4.184;
  else if ($powerUnit == "foot pound-force/minute")       return $power / 0.022597;
  else if ($powerUnit == "foot pound-force/second")       return $power / 1.35582;
  else if ($powerUnit == "gigawatt [GW]")                 return $power / 1e9;
  else if ($powerUnit == "horsepower (electric)")         return $power / 746;
  else if ($powerUnit == "horsepower (metric)")           return $power / 735.499;
  else if ($powerUnit == "watt [W]")                      return $power / 1;
  else if ($powerUnit == "joule/hora")                    return $power / 0.0002777777777777778;
  else if ($powerUnit == "joule/minuto")                  return $power / 0.016666666666666666;
  else if ($powerUnit == "joule/segundo")                 return $power / 1;
  else if ($powerUnit == "quilocaloria(th)/hora")         return $power / 1.1622222222222222;
  else if ($powerUnit == "quilocaloria(th)/minuto")       return $power / 69.73333333333333;
  else if ($powerUnit == "quilograma-for�a metro/hora")   return $power / 0.002724;
  else if ($powerUnit == "quilograma-for�a metro/minuto") return $power / 0.163444;
  else if ($powerUnit == "quilowatt [kW]")                return $power / 1e3;
  else if ($powerUnit == "megawatt [MW]")                 return $power / 1e6;
  else {
    return 0;
  }
}
//Press�o:

function ToSI_Press($pressure, $pressureUnit)
{
  if      ($pressureUnit == "atmosphere")                 return $pressure * 101325;
  else if ($pressureUnit == "bar")                        return $pressure * 1e5;
  else if ($pressureUnit == "cent�metro de merc�rio")     return $pressure * 1333.22;
  else if ($pressureUnit == "centimeter water")           return $pressure * 98.0665;
  else if ($pressureUnit == "feet of water")              return $pressure * 2989.06692;
  else if ($pressureUnit == "hectopascal [hPa]")          return $pressure * 100;
  else if ($pressureUnit == "inch of water")              return $pressure * 249.08891;
  else if ($pressureUnit == "polegada de merc�rio")       return $pressure * 3386.388;
  else if ($pressureUnit == "quilograma-for�a/cent�metro quadrado") return $pressure * 98066.5;
  else if ($pressureUnit == "quilograma-for�a/metro quadrado")      return $pressure * 9.80665;
  else if ($pressureUnit == "quilopascal [kPa]")                    return $pressure * 1000;
  else if ($pressureUnit == "kip/sq.inch")                return $pressure * 6894760;
  else if ($pressureUnit == "meganewton/metro quadrado")  return $pressure * 1e6;
  else if ($pressureUnit == "meter of water")             return $pressure * 9806.65;
  else if ($pressureUnit == "milibar")                    return $pressure * 100;
  else if ($pressureUnit == "mil�metro de merc�rio")      return $pressure * 133.322;
  else if ($pressureUnit == "millimeter of water")        return $pressure * 9.80665;
  else if ($pressureUnit == "newton/cent�metro quadrado") return $pressure * 1e4;
  else if ($pressureUnit == "newton/metro quadrado")      return $pressure * 1;
  else if ($pressureUnit == "newton/mil�metro quadrado")  return $pressure * 1e6;
  else if ($pressureUnit == "pascal [Pa]")                return $pressure * 1;
  else if ($pressureUnit == "pound-force/sq.foot")        return $pressure * 47.88;
  else if ($pressureUnit == "pound-force/sq.inch")        return $pressure * 6894.757;  //PSI
  else if ($pressureUnit == "poundal/sq.foot")            return $pressure * 1.44816;
  else if ($pressureUnit == "ton (UK)-force/sq.foot")     return $pressure * 107251;
  else if ($pressureUnit == "ton (UK)-force/sq.inch")     return $pressure * 1544256;
  else if ($pressureUnit == "ton (US)-force/sq.foot")     return $pressure * 95760;
  else if ($pressureUnit == "ton (US)-force/sq.inch")     return $pressure * 13789500;
  else if ($pressureUnit == "tonelada-for�a/cent�metro quadrado")   return $pressure * 98066500;
  else if ($pressureUnit == "tonelada-for�a/metro quadrado")        return $pressure * 9806.65;
  else if ($pressureUnit == "torricelli (torr)")          return $pressure * 133.322;
  else {
    return 0;
  }
}

function FromSI_Press($pressure, $pressureUnit)
{
  if      ($pressureUnit == "atmosphere")                 return $pressure / 101325;
  else if ($pressureUnit == "bar")                        return $pressure / 1e5;
  else if ($pressureUnit == "cent�metro de merc�rio")     return $pressure / 1333.22;
  else if ($pressureUnit == "centimeter water")           return $pressure / 98.0665;
  else if ($pressureUnit == "feet of water")              return $pressure / 2989.06692;
  else if ($pressureUnit == "hectopascal [hPa]")          return $pressure / 100;
  else if ($pressureUnit == "inch of water")              return $pressure / 249.08891;
  else if ($pressureUnit == "polegada de merc�rio")       return $pressure / 3386.388;
  else if ($pressureUnit == "quilograma-for�a/cent�metro quadrado") return $pressure / 98066.5;
  else if ($pressureUnit == "quilograma-for�a/metro quadrado")      return $pressure / 9.80665;
  else if ($pressureUnit == "quilopascal [kPa]")          return $pressure / 1000;
  else if ($pressureUnit == "kip/sq.inch")                return $pressure / 6894760;
  else if ($pressureUnit == "meganewton/metro quadrado")  return $pressure / 1e6;
  else if ($pressureUnit == "meter of water")             return $pressure / 9806.65;
  else if ($pressureUnit == "milibar")                    return $pressure / 100;
  else if ($pressureUnit == "mil�metro de merc�rio")      return $pressure / 133.322;
  else if ($pressureUnit == "millimeter of water")        return $pressure / 9.80665;
  else if ($pressureUnit == "newton/cent�metro quadrado") return $pressure / 1e4;
  else if ($pressureUnit == "newton/metro quadrado")      return $pressure / 1;
  else if ($pressureUnit == "newton/mil�metro quadrado")  return $pressure / 1e6;
  else if ($pressureUnit == "pascal [Pa]")                return $pressure / 1;
  else if ($pressureUnit == "pound-force/sq.foot")        return $pressure / 47.88;
  else if ($pressureUnit == "pound-force/sq.inch")        return $pressure / 6894.757;
  else if ($pressureUnit == "poundal/sq.foot")            return $pressure / 1.44816;
  else if ($pressureUnit == "ton (UK)-force/sq.foot")     return $pressure / 107251;
  else if ($pressureUnit == "ton (UK)-force/sq.inch")     return $pressure / 1544256;
  else if ($pressureUnit == "ton (US)-force/sq.foot")     return $pressure / 95760;
  else if ($pressureUnit == "ton (US)-force/sq.inch")     return $pressure / 13789500;
  else if ($pressureUnit == "tonelada-for�a/cent�metro quadrado") return $pressure / 98066500;
  else if ($pressureUnit == "tonelada-for�a/metro quadrado")      return $pressure / 9806.65;
  else if ($pressureUnit == "torricelli (torr)")                  return $pressure / 133.322;
  else {
    return 0;
  }
}

//Temperatura:

function ToSI_Temp($temperature, $temperatureUnit)
{
  if      ($temperatureUnit == "Celsius")     return $temperature + 273.15;
  else if ($temperatureUnit == "Fahrenheit")  return 5/9 * ($temperature + 459.67);
  else if ($temperatureUnit == "Kelvin")      return $temperature;
  else if ($temperatureUnit == "Rankine")     return 5/9 * $temperature;
  else if ($temperatureUnit == "R�aumure")    return 4/5 * $temperature + 273.15;
  else {
    return 0;
  }
}

function FromSI_Temp($temperature, $temperatureUnit)
{
  if      ($temperatureUnit == "Celsius")    return $temperature - 273.15;
  else if ($temperatureUnit == "Fahrenheit") return 9/5 * $temperature - 459.67;
  else if ($temperatureUnit == "Kelvin")     return $temperature;
  else if ($temperatureUnit == "Rankine")    return 9/5 * $temperature;
  else if ($temperatureUnit == "R�aumure")   return 5/4 * ($temperature - 273.15);
  else {
    return 0;
  }
}
//Volume:

function ToSI_Vol($volume, $volumeUnit)
{
  if      ($volumeUnit == "barrel (oil)")     return $volume * 158.987294928;
  else if ($volumeUnit == "bushel (UK)")      return $volume * 36.36872;
  else if ($volumeUnit == "bushel (US)")      return $volume * 35.23907016688;
  else if ($volumeUnit == "centilitro [cl]")  return $volume * 0.01;
  else if ($volumeUnit == "cent�metro c�bico")return $volume * 1e-3;
  else if ($volumeUnit == "dec�metro c�bico") return $volume * 1;
  else if ($volumeUnit == "dec�metro c�bico") return $volume * 1e6;
  else if ($volumeUnit == "p� c�bico")        return $volume * 28.316846592;
  else if ($volumeUnit == "polegada c�bica")  return $volume * 0.016387064;
  else if ($volumeUnit == "metro c�bico")     return $volume * 1e3;
  else if ($volumeUnit == "mil�metro c�bico") return $volume * 1e-6;
  else if ($volumeUnit == "jarda c�bica")     return $volume * 764.554857984;
  else if ($volumeUnit == "decilitro [dl]")   return $volume * 0.1;
  else if ($volumeUnit == "fluid once (UK)")  return $volume * 0.0284130625;
  else if ($volumeUnit == "fluid once (US)")  return $volume * 0.0295735295625;
  else if ($volumeUnit == "gal�o (UK)")       return $volume * 4.54609;
  else if ($volumeUnit == "gallon, dry (US)") return $volume * 4.40488377086;
  else if ($volumeUnit == "gallon, liquid (US)")return $volume * 3.785411784;
  else if ($volumeUnit == "litro (l ou L)")     return $volume * 1;
  else if ($volumeUnit == "litro (1901-1964)")  return $volume * 1.000028;
  else if ($volumeUnit == "mililitro [ml]")     return $volume * 1e-3;
  else if ($volumeUnit == "pint (UK)")          return $volume * 0.56826125;
  else if ($volumeUnit == "pint, dry (US)")     return $volume * 0.5506104713575;
  else if ($volumeUnit == "pint, liquid (US)")  return $volume * 0.473176473;
  else if ($volumeUnit == "quart (UK)")         return $volume * 1.1365225;
  else if ($volumeUnit == "quart, dry (US)")    return $volume * 1.101220942715;
  else if ($volumeUnit == "quart, liquid (US)") return $volume * 0.946352946;
  else {
    return 0;
  }
}

function FromSI_Vol($volume, $volumeUnit)
{
  if      ($volumeUnit == "barrel (oil)")     return $volume / 158.987294928;
  else if ($volumeUnit == "bushel (UK)")      return $volume / 36.36872;
  else if ($volumeUnit == "bushel (US)")      return $volume / 35.23907016688;
  else if ($volumeUnit == "centilitro [cl]")  return $volume / 0.01;
  else if ($volumeUnit == "cent�metro c�bico")return $volume / 1e-3;
  else if ($volumeUnit == "dec�metro c�bico") return $volume / 1;
  else if ($volumeUnit == "dec�metro c�bico") return $volume / 1e6;
  else if ($volumeUnit == "p� c�bico")        return $volume / 28.316846592;
  else if ($volumeUnit == "polegada c�bica")  return $volume / 0.016387064;
  else if ($volumeUnit == "metro c�bico")     return $volume / 1e3;
  else if ($volumeUnit == "mil�metro c�bico") return $volume / 1e-6;
  else if ($volumeUnit == "jarda c�bica")     return $volume / 764.554857984;
  else if ($volumeUnit == "decilitro [dl]")   return $volume / 0.1;
  else if ($volumeUnit == "fluid once (UK)")  return $volume / 0.0284130625;
  else if ($volumeUnit == "fluid once (US)")  return $volume / 0.0295735295625;
  else if ($volumeUnit == "gal�o (UK)")       return $volume / 4.54609;
  else if ($volumeUnit == "gallon, dry (US)") return $volume / 4.40488377086;
  else if ($volumeUnit == "gallon, liquid (US)") return $volume / 3.785411784;
  else if ($volumeUnit == "litro (l ou L)")      return $volume / 1;
  else if ($volumeUnit == "litro (1901-1964)")   return $volume / 1.000028;
  else if ($volumeUnit == "mililitro [ml]")      return $volume / 1e-3;
  else if ($volumeUnit == "pint (UK)")           return $volume / 0.56826125;
  else if ($volumeUnit == "pint, dry (US)")      return $volume / 0.5506104713575;
  else if ($volumeUnit == "pint, liquid (US)")   return $volume / 0.473176473;
  else if ($volumeUnit == "quart (UK)")          return $volume / 1.1365225;
  else if ($volumeUnit == "quart, dry (US)")     return $volume / 1.101220942715;
  else if ($volumeUnit == "quart, liquid (US)")  return $volume / 0.946352946;
  else {
    return 0;
  }
}

function ToSI_Ene($energy, $energyUnit)
{
  if      ($energyUnit == "Btu (IT)")              return $energy * 1055.056;
  else if ($energyUnit == "Btu (th)")              return $energy * 1054.350;
  else if ($energyUnit == "Btu (mean)")            return $energy * 1055.87;
  else if ($energyUnit == "caloria (IT)")          return $energy * 4.1868;
  else if ($energyUnit == "caloria (th)")          return $energy * 4.184;
  else if ($energyUnit == "caloria (mean)")        return $energy * 4.19002;
  else if ($energyUnit == "caloria (15C)")         return $energy * 4.18580;
  else if ($energyUnit == "caloria (20C)")         return $energy * 4.18190;
  else if ($energyUnit == "caloria (food)")        return $energy * 4186;
  else if ($energyUnit == "centigrade heat unit")  return $energy * 1900.4;
  else if ($energyUnit == "electron volt (eV)")    return $energy * 1.60219e-19;
  else if ($energyUnit == "erg")                   return $energy * 1e-7;
  else if ($energyUnit == "foot pound-force")      return $energy * 1.355817;
  else if ($energyUnit == "foot poundal")          return $energy * 0.042140;
  else if ($energyUnit == "gigajoule [GJ]")        return $energy * 1e9;
  else if ($energyUnit == "horsepower hour")       return $energy * 2684520;
  else if ($energyUnit == "joule [J]")             return $energy * 1;
  else if ($energyUnit == "quilocaloria (IT)")     return $energy * 4186.8;
  else if ($energyUnit == "quilocaloria (th)")     return $energy * 4184;
  else if ($energyUnit == "quilograma-for�a metro")return $energy * 9.80665;
  else if ($energyUnit == "quilojoule [kJ]")       return $energy * 1e3;
  else if ($energyUnit == "quilowatt hora [kWh]")  return $energy * 3600000;
  else if ($energyUnit == "megajoule [MJ]")        return $energy * 1e6;
  else if ($energyUnit == "newton metro [Nm]")     return $energy * 1;
  else if ($energyUnit == "therm")                 return $energy * 105500000;
  else if ($energyUnit == "watt segundo [Ws]")     return $energy * 1;
  else if ($energyUnit == "watt hora [Wh]")        return $energy * 3600;
  else {
    return 0;
  }
}

function FromSI_Ene($energy, $energyUnit)
{
  if      ($energyUnit == "Btu (IT)")              return $energy / 1055.056;
  else if ($energyUnit == "Btu (th)")              return $energy / 1054.350;
  else if ($energyUnit == "Btu (mean)")            return $energy / 1055.87;
  else if ($energyUnit == "caloria (IT)")          return $energy / 4.1868;
  else if ($energyUnit == "caloria (th)")          return $energy / 4.184;
  else if ($energyUnit == "caloria (mean)")        return $energy / 4.19002;
  else if ($energyUnit == "caloria (15C)")         return $energy / 4.18580;
  else if ($energyUnit == "caloria (20C)")         return $energy / 4.18190;
  else if ($energyUnit == "caloria (food)")        return $energy / 4186;
  else if ($energyUnit == "centigrade heat unit")  return $energy / 1900.4;
  else if ($energyUnit == "electron volt (eV)")    return $energy / 1.60219e-19;
  else if ($energyUnit == "erg")                   return $energy / 1e-7;
  else if ($energyUnit == "foot pound-force")      return $energy / 1.355817;
  else if ($energyUnit == "foot poundal")          return $energy / 0.042140;
  else if ($energyUnit == "gigajoule [GJ]")        return $energy / 1e9;
  else if ($energyUnit == "horsepower hour")       return $energy / 2684520;
  else if ($energyUnit == "joule [J]")             return $energy / 1;
  else if ($energyUnit == "quilocaloria (IT)")     return $energy / 4186.8;
  else if ($energyUnit == "quilocaloria (th)")     return $energy / 4184;
  else if ($energyUnit == "quilograma-for�a metro")return $energy / 9.80665;
  else if ($energyUnit == "quilojoule [kJ]")       return $energy / 1e3;
  else if ($energyUnit == "quilowatt hora [kWh]")  return $energy / 3600000;
  else if ($energyUnit == "megajoule [MJ]")        return $energy / 1e6;
  else if ($energyUnit == "newton metro [Nm]")     return $energy / 1;
  else if ($energyUnit == "therm")                 return $energy / 105500000;
  else if ($energyUnit == "watt segundo [Ws]")     return $energy / 1;
  else if ($energyUnit == "watt hora [Wh]")        return $energy / 3600;
  else {
    return 0;
  }
}

function ToSI_Den($density, $densityUnit)
{
  if      ($densityUnit == "gr�o/gal�o (UK)")            return $density * 0.000014253948343691203;
  else if ($densityUnit == "gr�o/gal�o (US)")            return $density * 0.000017118011571775823;
  else if ($densityUnit == "grama/cent�metro c�bico")    return $density * 1;
  else if ($densityUnit == "grama/litro")                return $density * 1e-3;
  else if ($densityUnit == "grama/mililitro")            return $density * 1;
  else if ($densityUnit == "quilograma/metro c�bico")    return $density * 1e-3;
  else if ($densityUnit == "quilograma/litro")           return $density * 1;
  else if ($densityUnit == "megagrama/metro c�bico")     return $density * 1;
  else if ($densityUnit == "miligrama/mililitro")        return $density * 1e-3;
  else if ($densityUnit == "miligrama/litro")            return $density * 1e-6;
  else if ($densityUnit == "on�a/polegada c�bica")       return $density * 1.729994044;
  else if ($densityUnit == "on�a/gal�o (UK)")            return $density * 0.006236023;
  else if ($densityUnit == "on�a/gal�o (US)")            return $density * 0.007489152;
  else if ($densityUnit == "libra/polegada c�bica")      return $density * 27.679904;
  else if ($densityUnit == "libra/p� c�bico")            return $density * 0.016018463;
  else if ($densityUnit == "libra/gal�o (UK)")           return $density * 0.099776373;
  else if ($densityUnit == "libra/gal�o (US)")           return $density * 0.119826427;
  else if ($densityUnit == "slug/cubic foot")            return $density * 0.51531788206;
  else if ($densityUnit == "tonelada/metro c�bico")      return $density * 1;
  else if ($densityUnit == "ton (UK)/cubic yard")        return $density * 1.328939184;
  else if ($densityUnit == "ton (US)/cubic yard")        return $density * 1.186552843;
  else {
    return 0;
  }
}

function FromSI_Den($density, $densityUnit)
{
  if      ($densityUnit == "gr�o/gal�o (UK)")            return $density / 0.000014253948343691203;
  else if ($densityUnit == "gr�o/gal�o (US)")            return $density / 0.000017118011571775823;
  else if ($densityUnit == "grama/cent�metro c�bico")    return $density / 1;
  else if ($densityUnit == "grama/litro")                return $density / 1e-3;
  else if ($densityUnit == "grama/mililitro")            return $density / 1;
  else if ($densityUnit == "quilograma/metro c�bico")    return $density / 1e-3;
  else if ($densityUnit == "quilograma/litro")           return $density / 1;
  else if ($densityUnit == "megagrama/metro c�bico")     return $density / 1;
  else if ($densityUnit == "miligrama/mililitro")        return $density / 1e-3;
  else if ($densityUnit == "miligrama/litro")            return $density / 1e-6;
  else if ($densityUnit == "on�a/polegada c�bica")       return $density / 1.729994044;
  else if ($densityUnit == "on�a/gal�o (UK)")            return $density / 0.006236023;
  else if ($densityUnit == "on�a/gal�o (US)")            return $density / 0.007489152;
  else if ($densityUnit == "libra/polegada c�bica")      return $density / 27.679904;
  else if ($densityUnit == "libra/p� c�bico")            return $density / 0.016018463;
  else if ($densityUnit == "libra/gal�o (UK)")           return $density / 0.099776373;
  else if ($densityUnit == "libra/gal�o (US)")           return $density / 0.119826427;
  else if ($densityUnit == "slug/cubic foot")            return $density / 0.51531788206;
  else if ($densityUnit == "tonelada/metro c�bico")      return $density / 1;
  else if ($densityUnit == "ton (UK)/cubic yard")        return $density / 1.328939184;
  else if ($densityUnit == "ton (US)/cubic yard")        return $density / 1.186552843;
  else {
    return 0;
  }
}

function ToSI_Velo($speed, $speedUnit)
{
  if      ($speedUnit == "cent�metro/minuto")     return $speed * 0.00016666666666666666 ;
  else if ($speedUnit == "cent�metro/segundo")    return $speed * 0.01;
  else if ($speedUnit == "p�/hora")               return $speed * 0.00008466683600033866;
  else if ($speedUnit == "p�/minuto")             return $speed * 0.00508;
  else if ($speedUnit == "p�/segundo")            return $speed * 0.3048;
  else if ($speedUnit == "polegada/minuto")       return $speed * 0.0004233341800016934;
  else if ($speedUnit == "polegada/segundo")      return $speed * 0.0254;
  else if ($speedUnit == "quil�metro/hora")       return $speed * 0.2777777777777778;
  else if ($speedUnit == "quil�metro/segundo")    return $speed * 1000;
  else if ($speedUnit == "n�")                    return $speed * 0.514444;
  else if ($speedUnit == "Mach number (ISA/SL)")  return $speed * 340.2933;
  else if ($speedUnit == "metro/hora")            return $speed * 0.0002777777777777778;
  else if ($speedUnit == "metro/minuto")          return $speed * 0.016666666666666666;
  else if ($speedUnit == "metro/segundo")         return $speed * 1;
  else if ($speedUnit == "milha/hora")            return $speed * 0.44704;
  else if ($speedUnit == "milha/minuto")          return $speed * 26.8224;
  else if ($speedUnit == "milha/segundo")         return $speed * 1609.344;
  else if ($speedUnit == "speed of light")        return $speed * 2.9979e8;
  else if ($speedUnit == "jarda/hora")            return $speed * 0.000254000508001016;
  else if ($speedUnit == "jarda/minuto")          return $speed * 0.01524;
  else if ($speedUnit == "jarda/segundo")         return $speed * 0.9144;
  else {
    return 0;
  }
}

function FromSI_Velo($speed, $speedUnit)
{
  if      ($speedUnit == "cent�metro/minuto")     return $speed / 0.00016666666666666666 ;
  else if ($speedUnit == "cent�metro/segundo")    return $speed / 0.01;
  else if ($speedUnit == "p�/hora")               return $speed / 0.00008466683600033866;
  else if ($speedUnit == "p�/minuto")             return $speed / 0.00508;
  else if ($speedUnit == "p�/segundo")            return $speed / 0.3048;
  else if ($speedUnit == "polegada/minuto")       return $speed / 0.0004233341800016934;
  else if ($speedUnit == "polegada/segundo")      return $speed / 0.0254;
  else if ($speedUnit == "quil�metro/hora")       return $speed / 0.2777777777777778;
  else if ($speedUnit == "quil�metro/segundo")    return $speed / 1000;
  else if ($speedUnit == "n�")                    return $speed / 0.514444;
  else if ($speedUnit == "Mach number (ISA/SL)")  return $speed / 340.2933;
  else if ($speedUnit == "metro/hora")            return $speed / 0.0002777777777777778;
  else if ($speedUnit == "metro/minuto")          return $speed / 0.016666666666666666;
  else if ($speedUnit == "metro/segundo")         return $speed / 1;
  else if ($speedUnit == "milha/hora")            return $speed / 0.44704;
  else if ($speedUnit == "milha/minuto")          return $speed / 26.8224;
  else if ($speedUnit == "milha/segundo")         return $speed / 1609.344;
  else if ($speedUnit == "speed of light")        return $speed / 2.9979e8;
  else if ($speedUnit == "jarda/hora")            return $speed / 0.000254000508001016;
  else if ($speedUnit == "jarda/minuto")          return $speed / 0.01524;
  else if ($speedUnit == "jarda/segundo")         return $speed / 0.9144;
  else {
    return 0;
  }
}


function ToSI_Tor($torque, $torqueUnit)
{
  if      ($torqueUnit == "dyne/cent�metro")            return $torque * 0.0000001;
  else if ($torqueUnit == "grama/cent�metro")           return $torque * (9.80665/100000);
  else if ($torqueUnit == "quilograma/cent�metro")      return $torque * (9.80665/100);
  else if ($torqueUnit == "quilograma/metro")           return $torque * 9.80665;
  else if ($torqueUnit == "quilonewton/metro")          return $torque * 1000;
  else if ($torqueUnit == "kilopond/metro")             return $torque * 9.80665;
  else if ($torqueUnit == "meganewton/metro")           return $torque * 1000000;
  else if ($torqueUnit == "micronewton/metro")          return $torque * 0.000001;
  else if ($torqueUnit == "milinewton/metro")           return $torque * 0.001;
  else if ($torqueUnit == "newton/centimetro")          return $torque * 0.01;
  else if ($torqueUnit == "newton/metro")               return $torque * 1;
  else if ($torqueUnit == "on�a/p�")                    return $torque * 0.084738622;
  else if ($torqueUnit == "on�a/polegada")              return $torque * (0.084738622/12);
  else if ($torqueUnit == "libra/p�")                   return $torque * (0.084738622*16);
  else if ($torqueUnit == "poundal/foot")               return $torque * 0.0421401099752144;
  else if ($torqueUnit == "libra/polegada")             return $torque * (0.084738622/12*16);
  else {
    return 0;
  }
}

function FromSI_Tor($torque, $torqueUnit)
{
  if      ($torqueUnit == "dyne/cent�metro")            return $torque / 0.0000001;
  else if ($torqueUnit == "grama/cent�metro")           return $torque / (9.80665/100000);
  else if ($torqueUnit == "quilograma/cent�metro")      return $torque / (9.80665/100);
  else if ($torqueUnit == "quilograma/metro")           return $torque / 9.80665;
  else if ($torqueUnit == "quilonewton/metro")          return $torque / 1000;
  else if ($torqueUnit == "kilopond/metro")             return $torque / 9.80665;
  else if ($torqueUnit == "meganewton/metro")           return $torque / 1000000;
  else if ($torqueUnit == "micronewton/metro")          return $torque / 0.000001;
  else if ($torqueUnit == "milinewton/metro")           return $torque / 0.001;
  else if ($torqueUnit == "newton/centimetro")          return $torque / 0.01;
  else if ($torqueUnit == "newton/metro")               return $torque / 1;
  else if ($torqueUnit == "on�a/p�")                    return $torque / 0.084738622;
  else if ($torqueUnit == "on�a/polegada")              return $torque / (0.084738622/12);
  else if ($torqueUnit == "libra/p�")                   return $torque / (0.084738622*16);
  else if ($torqueUnit == "poundal/foot")               return $torque / 0.0421401099752144;
  else if ($torqueUnit == "libra/polegada")             return $torque / (0.084738622/12*16);
  else {
    return 0;
  }
}

function ToSI_Flu($flow, $flowUnit)
{
  if      ($flowUnit == "p� acre/dia")                  return $flow *(1233.48184/60/60/24);
  else if ($flowUnit == "p� acre/hora")                 return $flow *(1233.48184/60/60);
  else if ($flowUnit == "p� acre/minuto")               return $flow *(1233.48184/60);
  else if ($flowUnit == "p� acre/segundo")              return $flow *(1233.48184);
  else if ($flowUnit == "p� acre/dia [exame]")          return $flow *(1233.48924/60/60/24);
  else if ($flowUnit == "p� acre/hora [exame]")         return $flow *(1233.48924/60/60);
  else if ($flowUnit == "p� acre/minuto [exame]")       return $flow *(1233.48924/60);
  else if ($flowUnit == "p� acre/segundo")              return $flow *(1233.48924);
  else if ($flowUnit == "polegada acre/dia")            return $flow *((1233.48184/12)/60/60/24);
  else if ($flowUnit == "polegada acre/hora")           return $flow *((1233.48184/12)/60/60);
  else if ($flowUnit == "polegada acre/hora")           return $flow *((1233.48184/12)/60);
  else if ($flowUnit == "polegada acre/segundo")        return $flow *(1233.48184/12);
  else if ($flowUnit == "polegada acre/dia [exame]")    return $flow *((1233.48924/12)/60/60/24);
  else if ($flowUnit == "polegada acre/hora [exame]")   return $flow *((1233.48924/12)/60/60);
  else if ($flowUnit == "polegada acre/minuto [exame]") return $flow *((1233.48924/12)/60);
  else if ($flowUnit == "polegada acre/segundo [exame]")return $flow *(1233.48924/12);
  else if ($flowUnit == "barril/dia [petr�leo]")       return $flow *((0.0037854118/60/60/24)*42);
  else if ($flowUnit == "barril/hora [petr�leo]")      return $flow *((0.0037854118/60/60)*42);
  else if ($flowUnit == "barril/minuto [petr�leo]")    return $flow *((0.0037854118/60)*42);
  else if ($flowUnit == "barril/segundo [petr�leo]")   return $flow *(0.0037854118*42);
  else if ($flowUnit == "barril/dia [UK]")              return $flow *((0.00454609/60/60/24)*36);
  else if ($flowUnit == "barrle/hora [UK]")             return $flow *((0.00454609/60/60)*36);
  else if ($flowUnit == "barril/minuto [UK]")           return $flow *((0.00454609/60)*36);
  else if ($flowUnit == "barril/segundo [UK]")          return $flow *(0.00454609*36);
  else if ($flowUnit == "barril/dia [US]")              return $flow *((0.0037854118/60/60/24)*31.5);
  else if ($flowUnit == "barril/hora [US]")             return $flow *((0.0037854118/60/60)*31.5);
  else if ($flowUnit == "barril/minuto [US]")           return $flow *((0.0037854118/60)*31.5);
  else if ($flowUnit == "barril/segundo [US]")          return $flow *(0.0037854118*31.5);
  else if ($flowUnit == "barril/dia [US beer/wine]")    return $flow *((0.0037854118/60/60/24)*31);
  else if ($flowUnit == "barril/hora [US beer/wine]")   return $flow *((0.0037854118/60/60)*31);
  else if ($flowUnit == "barril/minuto [US beer/wine]") return $flow *((0.0037854118/60)*31);
  else if ($flowUnit == "barril/segundo [US beer/wine]")return $flow *(0.0037854118*31);
  else if ($flowUnit == "bilh�o p� c�bico /dia")        return $flow *(28316847/60/60/24);
  else if ($flowUnit == "bilh�o p� c�bico /hora")       return $flow *(28316847/60/60);
  else if ($flowUnit == "bilh�o p� c�bico /minuto")     return $flow *(28316847/60);
  else if ($flowUnit == "bilh�o p� c�bico /segundo")    return $flow *(28316847);
  else if ($flowUnit == "centilitro/dia")               return $flow *(0.00001/60/60/24);
  else if ($flowUnit == "centilitro/hora")              return $flow *(0.00001/60/60);
  else if ($flowUnit == "centilitro/minuto")            return $flow *(0.00001/60);
  else if ($flowUnit == "centilitro/segundo")           return $flow *(0.00001);
  else if ($flowUnit == "cubem/dia")                    return $flow *(4168181830/60/60/24);
  else if ($flowUnit == "cubem/hora")                   return $flow *(4168181830/60/60);
  else if ($flowUnit == "cubem/minuto")                 return $flow *(4168181830/60);
  else if ($flowUnit == "cubem/segundo")                return $flow *(4168181830);
  else if ($flowUnit == "centimetro c�bico/dia")        return $flow *(0.000001/60/60/24);
  else if ($flowUnit == "centimetro c�bico/hora")       return $flow *(0.000001/60/60);
  else if ($flowUnit == "centimetro c�bico/minuto")     return $flow *(0.000001/60);
  else if ($flowUnit == "centimetro c�bico/segundo")    return $flow *(0.000001);
  else if ($flowUnit == "dec�metro c�bico/dia")         return $flow *(0.001/60/60/24);
  else if ($flowUnit == "dec�metro c�bico/hora")        return $flow *(0.001/60/60);
  else if ($flowUnit == "dec�metro c�bico/minuto")      return $flow *(0.001/60);
  else if ($flowUnit == "dec�metro c�bico/segundo")     return $flow *(0.001);
  else if ($flowUnit == "decametro c�bico/dia")         return $flow *(1000/60/60/24);
  else if ($flowUnit == "decametro c�bico/hora")        return $flow *(1000/60/60);
  else if ($flowUnit == "decametro c�bico/minuto")      return $flow *(1000/60);
  else if ($flowUnit == "decametro c�bico/segundo")     return $flow *(1000);
  else if ($flowUnit == "p� c�bico/dia")                return $flow *(0.028316847/60/60/24);
  else if ($flowUnit == "p� c�bico/hora")               return $flow *(0.028316847/60/60);
  else if ($flowUnit == "p� c�bico/minuto")             return $flow *(0.028316847/60);
  else if ($flowUnit == "p� c�bico/segundo")            return $flow *(0.028316847);
  else if ($flowUnit == "polegada c�bica/dia")          return $flow *(0.028316847/1728/60/60/24);
  else if ($flowUnit == "polegada c�bica/hora")         return $flow *(0.028316847/1728/60/60);
  else if ($flowUnit == "polegada c�bica/minuto")       return $flow *(0.028316847/1728/60);
  else if ($flowUnit == "polegada c�bica/segundo")      return $flow *(0.028316847/1728);
  else if ($flowUnit == "quilometro c�bico/dia")        return $flow *(1000000000/60/60/24);
  else if ($flowUnit == "quilometro c�bico/hora")       return $flow *(1000000000/60/60);
  else if ($flowUnit == "quilometro c�bico/minuto")     return $flow *(1000000000/60);
  else if ($flowUnit == "quilometro c�bico/segundo")    return $flow *(1000000000);
  else if ($flowUnit == "metro c�bico/dia")             return $flow *(1/60/60/24);
  else if ($flowUnit == "metro c�bico/hora")            return $flow *(1/60/60);
  else if ($flowUnit == "metro c�bico/minuto")          return $flow *(1/60);
  else if ($flowUnit == "metro c�bico/segundo")         return $flow *(1);
  else if ($flowUnit == "milha c�bica/dia")             return $flow *(4168181830/60/60/24);
  else if ($flowUnit == "milha c�bica/hora")            return $flow *(4168181830/60/60);
  else if ($flowUnit == "milha c�bica/minuto")          return $flow *(4168181830/60);
  else if ($flowUnit == "milha c�bica/segundo")         return $flow *(4168181830);
  else if ($flowUnit == "mil�metro c�bico/dia")         return $flow *(0.000000001/60/60/24);
  else if ($flowUnit == "mil�metro c�bico/hora")        return $flow *(0.000000001/60/60);
  else if ($flowUnit == "mil�metro c�bico/minuto")      return $flow *(0.000000001/60);
  else if ($flowUnit == "mil�metro c�bico/segundo")     return $flow *(0.000000001);
  else if ($flowUnit == "jarda c�bica/dia")             return $flow *((0.028316847*27)/60/60/24);
  else if ($flowUnit == "jarda c�bica/hora")            return $flow *((0.028316847*27)/60/60);
  else if ($flowUnit == "jarda c�bica/minuto")          return $flow *((0.028316847*27)/60);
  else if ($flowUnit == "jarda c�bica/segundo")         return $flow *(0.028316847*27);
  else if ($flowUnit == "cusec")                        return $flow *(0.028316847);
  else if ($flowUnit == "decilitro/dia")                return $flow *(0.0001/60/60/24);
  else if ($flowUnit == "decilitro/hora")               return $flow *(0.0001/60/60);
  else if ($flowUnit == "decilitro/minuto")             return $flow *(0.0001/60);
  else if ($flowUnit == "decilitro/segundo")            return $flow *(0.0001);
  else if ($flowUnit == "decalitro/dia")                return $flow *(0.01/60/60/24);
  else if ($flowUnit == "decalitro/hora")               return $flow *(0.01/60/60);
  else if ($flowUnit == "decalitro/minuto")             return $flow *(0.01/60);
  else if ($flowUnit == "decalitro/segundo")            return $flow *(0.01);
  else if ($flowUnit == "gal�o/dia [UK]")               return $flow *(0.00454609/60/60/24);
  else if ($flowUnit == "gal�o/hora [UK]")              return $flow *(0.00454609/60/60);
  else if ($flowUnit == "gal�o/minuto [UK]")            return $flow *(0.00454609/60);
  else if ($flowUnit == "gal�o/segundo [UK]")           return $flow *(0.00454609);
  else if ($flowUnit == "gal�o/dia [US]")               return $flow *(0.0037854118/60/60/24);
  else if ($flowUnit == "gal�o/hora [US]")              return $flow *(0.0037854118/60/60);
  else if ($flowUnit == "gal�o/minuto [US]")            return $flow *(0.0037854118/60);
  else if ($flowUnit == "gal�o/segundo [US]")           return $flow *(0.0037854118);
  else if ($flowUnit == "hectare metro/dia")            return $flow *(10000/60/60/24);
  else if ($flowUnit == "hectare metro/hora")           return $flow *(10000/60/60);
  else if ($flowUnit == "hectare metro/minuto")         return $flow *(10000/60);
  else if ($flowUnit == "hectare metro/segundo")        return $flow *(10000);
  else if ($flowUnit == "hectalitro/dia")               return $flow *(0.1/60/60/24);
  else if ($flowUnit == "hectalitro/hora")              return $flow *(0.1/60/60);
  else if ($flowUnit == "hectalitro/minuto")            return $flow *(0.1/60);
  else if ($flowUnit == "hectalitro/segundo")           return $flow *(0.1);
  else if ($flowUnit == "quilolitro/dia")               return $flow *(1/60/60/24);
  else if ($flowUnit == "quilolitro/hora")              return $flow *(1/60/60);
  else if ($flowUnit == "quilolitro/minuto")            return $flow *(1/60);
  else if ($flowUnit == "quilolitro/segundo")           return $flow *(1);
  else if ($flowUnit == "lambda/dia")                   return $flow *(0.000000001/60/60/24);
  else if ($flowUnit == "lambda/hora")                  return $flow *(0.000000001/60/60);
  else if ($flowUnit == "lambda/minuto")                return $flow *(0.000000001/60);
  else if ($flowUnit == "lambda/segundo")               return $flow *(0.000000001);
  else if ($flowUnit == "litro/dia")                    return $flow *(0.001/60/60/24);
  else if ($flowUnit == "litro/hora")                   return $flow *(0.001/60/60);
  else if ($flowUnit == "litro/minuto")                 return $flow *(0.001/60);
  else if ($flowUnit == "litro/segundo")                return $flow *(0.001);
  else if ($flowUnit == "mil�metro/dia")                return $flow *(0.000001/60/60/24);
  else if ($flowUnit == "mil�metro/hora")               return $flow *(0.000001/60/60);
  else if ($flowUnit == "mil�metro/minuto")             return $flow *(0.000001/60);
  else if ($flowUnit == "mil�metro/segundo")            return $flow *(0.000001);
  else if ($flowUnit == "milh�o p� acre/dia")           return $flow *(1233481840/60/60/24);
  else if ($flowUnit == "milh�o p� acre/hora")          return $flow *(1233481840/60/60);
  else if ($flowUnit == "milh�o p� acre/minuto")        return $flow *(1233481840/60);
  else if ($flowUnit == "milh�o p� acre/segundo")       return $flow *(1233481840);
  else if ($flowUnit == "milh�o p� c�bico/dia")         return $flow *(28316.847/60/60/24);
  else if ($flowUnit == "milh�o p� c�bico/hora")        return $flow *(28316.847/60/60);
  else if ($flowUnit == "milh�o p� c�bico/minuto")      return $flow *(28316.847/60);
  else if ($flowUnit == "milh�o p� c�bico/segundo")     return $flow *(28316.847);
  else if ($flowUnit == "milh�o gal�o/dia [UK]")        return $flow *(4546.09/60/60/24);
  else if ($flowUnit == "milh�o gal�o/hora [UK]")       return $flow *(4546.09/60/60);
  else if ($flowUnit == "milh�o gal�o/minuto [UK]")     return $flow *(4546.09/60);
  else if ($flowUnit == "milh�o gal�o/segundo [UK]")    return $flow *(4546.09);
  else if ($flowUnit == "milh�o gal�o/dia [US]")        return $flow *(3785.4118/60/60/24);
  else if ($flowUnit == "milh�o gal�o/hora [US]")       return $flow *(3785.4118/60/60);
  else if ($flowUnit == "milh�o gal�o/minuto [US]")     return $flow *(3785.4118/60);
  else if ($flowUnit == "milh�o gal�o/segundo [US]")    return $flow *(3785.4118);
  else if ($flowUnit == "polegada (mina) [AZ, CA, OR]")return $flow *(0.028316847/60*1.5);
  else if ($flowUnit == "polegada (mina) [CO]")         return $flow *(0.028316847/60*1.5625);
  else if ($flowUnit == "polegada (mina) [ID, WA, NM]") return $flow *(0.0037854118/60*9);
  else if ($flowUnit == "on�a/dia [UK]")                return $flow *(0.00454609/160/60/60/24);
  else if ($flowUnit == "on�a/hora [UK]")               return $flow *(0.00454609/160/60/60);
  else if ($flowUnit == "on�a/minuto [UK]")             return $flow *(0.00454609/160/60);
  else if ($flowUnit == "on�a/segundo [UK]")            return $flow *(0.00454609/160);
  else if ($flowUnit == "on�a/dia [US]")                return $flow *(0.0037854118/128/60/60/24);
  else if ($flowUnit == "on�a/hora [US]")               return $flow *(0.0037854118/128/60/60);
  else if ($flowUnit == "on�a/minuto [US]")             return $flow *(0.0037854118/128/60);
  else if ($flowUnit == "on�a/segundo [US]")            return $flow *(0.0037854118/128);
  else if ($flowUnit == "petrograd standard/dia")       return $flow *((0.028316847*165)/60/60/24);
  else if ($flowUnit == "petrograd standard/hora")      return $flow *((0.028316847*165)/60/60);
  else if ($flowUnit == "petrograd standard/minuto")    return $flow *((0.028316847*165)/60);
  else if ($flowUnit == "petrograd standard/segundo")   return $flow *(0.028316847*165);
  else if ($flowUnit == "stere/dia")                    return $flow *(1/60/60/24);
  else if ($flowUnit == "stere/hora")                   return $flow *(1/60/60);
  else if ($flowUnit == "stere/minuto")                 return $flow *(1/60);
  else if ($flowUnit == "stere/segundo")                return $flow *(1);
  else if ($flowUnit == "mil p� c�bico/dia")            return $flow *(28.316847/60/60/24);
  else if ($flowUnit == "mil p� c�bico/hora")           return $flow *(28.316847/60/60);
  else if ($flowUnit == "mil p� c�bico/minuto")         return $flow *(28.316847/60);
  else if ($flowUnit == "mil p� c�bico/segundo")        return $flow *(28.316847);
  else if ($flowUnit == "trilh�o p� c�bico/dia")        return $flow *(28316847000/60/60/24);
  else if ($flowUnit == "trilh�o p� c�bico/hora")       return $flow *(28316847000/60/60);
  else if ($flowUnit == "trilh�o p� c�bico/minuto")     return $flow *(28316847000/60);
  else if ($flowUnit == "trilh�o p� c�bico/segundo")    return $flow *(28316847000);
  else {
    return 0;
  }
}



function FromSI_Flu($flow, $flowUnit)
{
  if      ($flowUnit == "p� acre/dia")                  return $flow /(1233.48184/60/60/24);
  else if ($flowUnit == "p� acre/hora")                 return $flow /(1233.48184/60/60);
  else if ($flowUnit == "p� acre/minuto")               return $flow /(1233.48184/60);
  else if ($flowUnit == "p� acre/segundo")              return $flow /(1233.48184);
  else if ($flowUnit == "p� acre/dia [exame]")          return $flow /(1233.48924/60/60/24);
  else if ($flowUnit == "p� acre/hora [exame]")         return $flow /(1233.48924/60/60);
  else if ($flowUnit == "p� acre/minuto [exame]")       return $flow /(1233.48924/60);
  else if ($flowUnit == "p� acre/segundo")              return $flow /(1233.48924);
  else if ($flowUnit == "polegada acre/dia")            return $flow /((1233.48184/12)/60/60/24);
  else if ($flowUnit == "polegada acre/hora")           return $flow /((1233.48184/12)/60/60);
  else if ($flowUnit == "polegada acre/hora")           return $flow /((1233.48184/12)/60);
  else if ($flowUnit == "polegada acre/segundo")        return $flow /(1233.48184/12);
  else if ($flowUnit == "polegada acre/dia [exame]")    return $flow /((1233.48924/12)/60/60/24);
  else if ($flowUnit == "polegada acre/hora [exame]")   return $flow /((1233.48924/12)/60/60);
  else if ($flowUnit == "polegada acre/minuto [exame]") return $flow /((1233.48924/12)/60);
  else if ($flowUnit == "polegada acre/segundo [exame]")return $flow /(1233.48924/12);
  else if ($flowUnit == "barril/dia [petr�leo] ")       return $flow /((0.0037854118/60/60/24)*42);
  else if ($flowUnit == "barril/hora [petr�leo] ")      return $flow /((0.0037854118/60/60)*42);
  else if ($flowUnit == "barril/minuto [petr�leo] ")    return $flow /((0.0037854118/60)*42);
  else if ($flowUnit == "barril/segundo [petr�leo] ")   return $flow /(0.0037854118*42);
  else if ($flowUnit == "barril/dia [UK]")              return $flow /((0.00454609/60/60/24)*36);
  else if ($flowUnit == "barrle/hora [UK]")             return $flow /((0.00454609/60/60)*36);
  else if ($flowUnit == "barril/minuto [UK]")           return $flow /((0.00454609/60)*36);
  else if ($flowUnit == "barril/segundo [UK]")          return $flow /(0.00454609*36);
  else if ($flowUnit == "barril/dia [US]")              return $flow /((0.0037854118/60/60/24)*31.5);
  else if ($flowUnit == "barril/hora [US]")             return $flow /((0.0037854118/60/60)*31.5);
  else if ($flowUnit == "barril/minuto [US]")           return $flow /((0.0037854118/60)*31.5);
  else if ($flowUnit == "barril/segundo [US]")          return $flow /(0.0037854118*31.5);
  else if ($flowUnit == "barril/dia [US beer/wine]")    return $flow /((0.0037854118/60/60/24)*31);
  else if ($flowUnit == "barril/hora [US beer/wine]")   return $flow /((0.0037854118/60/60)*31);
  else if ($flowUnit == "barril/minuto [US beer/wine]") return $flow /((0.0037854118/60)*31);
  else if ($flowUnit == "barril/segundo [US beer/wine]")return $flow /(0.0037854118*31);
  else if ($flowUnit == "bilh�o p� c�bico /dia")        return $flow /(28316847/60/60/24);
  else if ($flowUnit == "bilh�o p� c�bico /hora")       return $flow /(28316847/60/60);
  else if ($flowUnit == "bilh�o p� c�bico /minuto")     return $flow /(28316847/60);
  else if ($flowUnit == "bilh�o p� c�bico /segundo")    return $flow /(28316847);
  else if ($flowUnit == "centilitro/dia")               return $flow /(0.00001/60/60/24);
  else if ($flowUnit == "centilitro/hora")              return $flow /(0.00001/60/60);
  else if ($flowUnit == "centilitro/minuto")            return $flow /(0.00001/60);
  else if ($flowUnit == "centilitro/segundo")           return $flow /(0.00001);
  else if ($flowUnit == "cubem/dia")                    return $flow /(4168181830/60/60/24);
  else if ($flowUnit == "cubem/hora")                   return $flow /(4168181830/60/60);
  else if ($flowUnit == "cubem/minuto")                 return $flow /(4168181830/60);
  else if ($flowUnit == "cubem/segundo")                return $flow /(4168181830);
  else if ($flowUnit == "centimetro c�bico/dia")        return $flow /(0.000001/60/60/24);
  else if ($flowUnit == "centimetro c�bico/hora")       return $flow /(0.000001/60/60);
  else if ($flowUnit == "centimetro c�bico/minuto")     return $flow /(0.000001/60);
  else if ($flowUnit == "centimetro c�bico/segundo")    return $flow /(0.000001);
  else if ($flowUnit == "dec�metro c�bico/dia")         return $flow /(0.001/60/60/24);
  else if ($flowUnit == "dec�metro c�bico/hora")        return $flow /(0.001/60/60);
  else if ($flowUnit == "dec�metro c�bico/minuto")      return $flow /(0.001/60);
  else if ($flowUnit == "dec�metro c�bico/segundo")     return $flow /(0.001);
  else if ($flowUnit == "decametro c�bico/dia")         return $flow /(1000/60/60/24);
  else if ($flowUnit == "decametro c�bico/hora")        return $flow /(1000/60/60);
  else if ($flowUnit == "decametro c�bico/minuto")      return $flow /(1000/60);
  else if ($flowUnit == "decametro c�bico/segundo")     return $flow /(1000);
  else if ($flowUnit == "p� c�bico/dia")                return $flow /(0.028316847/60/60/24);
  else if ($flowUnit == "p� c�bico/hora")               return $flow /(0.028316847/60/60);
  else if ($flowUnit == "p� c�bico/minuto")             return $flow /(0.028316847/60);
  else if ($flowUnit == "p� c�bico/segundo")            return $flow /(0.028316847);
  else if ($flowUnit == "polegada c�bica/dia")          return $flow /(0.028316847/1728/60/60/24);
  else if ($flowUnit == "polegada c�bica/hora")         return $flow /(0.028316847/1728/60/60);
  else if ($flowUnit == "polegada c�bica/minuto")       return $flow /(0.028316847/1728/60);
  else if ($flowUnit == "polegada c�bica/segundo")      return $flow /(0.028316847/1728);
  else if ($flowUnit == "quilometro c�bico/dia")        return $flow /(1000000000/60/60/24);
  else if ($flowUnit == "quilometro c�bico/hora")       return $flow /(1000000000/60/60);
  else if ($flowUnit == "quilometro c�bico/minuto")     return $flow /(1000000000/60);
  else if ($flowUnit == "quilometro c�bico/segundo")    return $flow /(1000000000);
  else if ($flowUnit == "metro c�bico/dia")             return $flow /(1/60/60/24);
  else if ($flowUnit == "metro c�bico/hora")            return $flow /(1/60/60);
  else if ($flowUnit == "metro c�bico/minuto")          return $flow /(1/60);
  else if ($flowUnit == "metro c�bico/segundo")         return $flow /(1);
  else if ($flowUnit == "milha c�bica/dia")             return $flow /(4168181830/60/60/24);
  else if ($flowUnit == "milha c�bica/hora")            return $flow /(4168181830/60/60);
  else if ($flowUnit == "milha c�bica/minuto")          return $flow /(4168181830/60);
  else if ($flowUnit == "milha c�bica/segundo")         return $flow /(4168181830);
  else if ($flowUnit == "mil�metro c�bico/dia")         return $flow /(0.000000001/60/60/24);
  else if ($flowUnit == "mil�metro c�bico/hora")        return $flow /(0.000000001/60/60);
  else if ($flowUnit == "mil�metro c�bico/minuto")      return $flow /(0.000000001/60);
  else if ($flowUnit == "mil�metro c�bico/segundo")     return $flow /(0.000000001);
  else if ($flowUnit == "jarda c�bica/dia")             return $flow /((0.028316847*27)/60/60/24);
  else if ($flowUnit == "jarda c�bica/hora")            return $flow /((0.028316847*27)/60/60);
  else if ($flowUnit == "jarda c�bica/minuto")          return $flow /((0.028316847*27)/60);
  else if ($flowUnit == "jarda c�bica/segundo")         return $flow /(0.028316847*27);
  else if ($flowUnit == "cusec")                        return $flow /(0.028316847);
  else if ($flowUnit == "decilitro/dia")                return $flow /(0.0001/60/60/24);
  else if ($flowUnit == "decilitro/hora")               return $flow /(0.0001/60/60);
  else if ($flowUnit == "decilitro/minuto")             return $flow /(0.0001/60);
  else if ($flowUnit == "decilitro/segundo")            return $flow /(0.0001);
  else if ($flowUnit == "decalitro/dia")                return $flow /(0.01/60/60/24);
  else if ($flowUnit == "decalitro/hora")               return $flow /(0.01/60/60);
  else if ($flowUnit == "decalitro/minuto")             return $flow /(0.01/60);
  else if ($flowUnit == "decalitro/segundo")            return $flow /(0.01);
  else if ($flowUnit == "gal�o/dia [UK]")               return $flow /(0.00454609/60/60/24);
  else if ($flowUnit == "gal�o/hora [UK]")              return $flow /(0.00454609/60/60);
  else if ($flowUnit == "gal�o/minuto [UK]")            return $flow /(0.00454609/60);
  else if ($flowUnit == "gal�o/segundo [UK]")           return $flow /(0.00454609);
  else if ($flowUnit == "gal�o/dia [US]")               return $flow /(0.0037854118/60/60/24);
  else if ($flowUnit == "gal�o/hora [US]")              return $flow /(0.0037854118/60/60);
  else if ($flowUnit == "gal�o/minuto [US]")            return $flow /(0.0037854118/60);
  else if ($flowUnit == "gal�o/segundo [US]")           return $flow /(0.0037854118);
  else if ($flowUnit == "hectare metro/dia")            return $flow /(10000/60/60/24);
  else if ($flowUnit == "hectare metro/hora")           return $flow /(10000/60/60);
  else if ($flowUnit == "hectare metro/minuto")         return $flow /(10000/60);
  else if ($flowUnit == "hectare metro/segundo")        return $flow /(10000);
  else if ($flowUnit == "hectalitro/dia")               return $flow /(0.1/60/60/24);
  else if ($flowUnit == "hectalitro/hora")              return $flow /(0.1/60/60);
  else if ($flowUnit == "hectalitro/minuto")            return $flow /(0.1/60);
  else if ($flowUnit == "hectalitro/segundo")           return $flow /(0.1);
  else if ($flowUnit == "quilolitro/dia")               return $flow /(1/60/60/24);
  else if ($flowUnit == "quilolitro/hora")              return $flow /(1/60/60);
  else if ($flowUnit == "quilolitro/minuto")            return $flow /(1/60);
  else if ($flowUnit == "quilolitro/segundo")           return $flow /(1);
  else if ($flowUnit == "lambda/dia")                   return $flow /(0.000000001/60/60/24);
  else if ($flowUnit == "lambda/hora")                  return $flow /(0.000000001/60/60);
  else if ($flowUnit == "lambda/minuto")                return $flow /(0.000000001/60);
  else if ($flowUnit == "lambda/segundo")               return $flow /(0.000000001);
  else if ($flowUnit == "litro/dia")                    return $flow /(0.001/60/60/24);
  else if ($flowUnit == "litro/hora")                   return $flow /(0.001/60/60);
  else if ($flowUnit == "litro/minuto")                 return $flow /(0.001/60);
  else if ($flowUnit == "litro/segundo")                return $flow /(0.001);
  else if ($flowUnit == "mil�metro/dia")                return $flow /(0.000001/60/60/24);
  else if ($flowUnit == "mil�metro/hora")               return $flow /(0.000001/60/60);
  else if ($flowUnit == "mil�metro/minuto")             return $flow /(0.000001/60);
  else if ($flowUnit == "mil�metro/segundo")            return $flow /(0.000001);
  else if ($flowUnit == "milh�o p� acre/dia")           return $flow /(1233481840/60/60/24);
  else if ($flowUnit == "milh�o p� acre/hora")          return $flow /(1233481840/60/60);
  else if ($flowUnit == "milh�o p� acre/minuto")        return $flow /(1233481840/60);
  else if ($flowUnit == "milh�o p� acre/segundo")       return $flow /(1233481840);
  else if ($flowUnit == "milh�o p� c�bico/dia")         return $flow /(28316.847/60/60/24);
  else if ($flowUnit == "milh�o p� c�bico/hora")        return $flow /(28316.847/60/60);
  else if ($flowUnit == "milh�o p� c�bico/minuto")      return $flow /(28316.847/60);
  else if ($flowUnit == "milh�o p� c�bico/segundo")     return $flow /(28316.847);
  else if ($flowUnit == "milh�o gal�o/dia [UK]")        return $flow /(4546.09/60/60/24);
  else if ($flowUnit == "milh�o gal�o/hora [UK]")       return $flow /(4546.09/60/60);
  else if ($flowUnit == "milh�o gal�o/minuto [UK]")     return $flow /(4546.09/60);
  else if ($flowUnit == "milh�o gal�o/segundo [UK]")    return $flow /(4546.09);
  else if ($flowUnit == "milh�o gal�o/dia [US]")        return $flow /(3785.4118/60/60/24);
  else if ($flowUnit == "milh�o gal�o/hora [US]")       return $flow /(3785.4118/60/60);
  else if ($flowUnit == "milh�o gal�o/minuto [US]")     return $flow /(3785.4118/60);
  else if ($flowUnit == "milh�o gal�o/segundo [US]")    return $flow /(3785.4118);
  else if ($flowUnit == "polegada (mina) [AZ, CA, OR] ")return $flow /(0.028316847/60*1.5);
  else if ($flowUnit == "polegada (mina) [CO]")         return $flow /(0.028316847/60*1.5625);
  else if ($flowUnit == "polegada (mina) [ID, WA, NM]") return $flow /(0.0037854118/60*9);
  else if ($flowUnit == "on�a/dia [UK]")                return $flow /(0.00454609/160/60/60/24);
  else if ($flowUnit == "on�a/hora [UK]")               return $flow /(0.00454609/160/60/60);
  else if ($flowUnit == "on�a/minuto [UK]")             return $flow /(0.00454609/160/60);
  else if ($flowUnit == "on�a/segundo [UK]")            return $flow /(0.00454609/160);
  else if ($flowUnit == "on�a/dia [US]")                return $flow /(0.0037854118/128/60/60/24);
  else if ($flowUnit == "on�a/hora [US]")               return $flow /(0.0037854118/128/60/60);
  else if ($flowUnit == "on�a/minuto [US]")             return $flow /(0.0037854118/128/60);
  else if ($flowUnit == "on�a/segundo [US]")            return $flow /(0.0037854118/128);
  else if ($flowUnit == "petrograd standard/dia")       return $flow /((0.028316847*165)/60/60/24);
  else if ($flowUnit == "petrograd standard/hora")      return $flow /((0.028316847*165)/60/60);
  else if ($flowUnit == "petrograd standard/minuto")    return $flow /((0.028316847*165)/60);
  else if ($flowUnit == "petrograd standard/segundo")   return $flow /(0.028316847*165);
  else if ($flowUnit == "stere/dia")                    return $flow /(1/60/60/24);
  else if ($flowUnit == "stere/hora")                   return $flow /(1/60/60);
  else if ($flowUnit == "stere/minuto")                 return $flow /(1/60);
  else if ($flowUnit == "stere/segundo")                return $flow /(1);
  else if ($flowUnit == "mil p� c�bico/dia")            return $flow /(28.316847/60/60/24);
  else if ($flowUnit == "mil p� c�bico/hora")           return $flow /(28.316847/60/60);
  else if ($flowUnit == "mil p� c�bico/minuto")         return $flow /(28.316847/60);
  else if ($flowUnit == "mil p� c�bico/segundo")        return $flow /(28.316847);
  else if ($flowUnit == "trilh�o p� c�bico/dia")        return $flow /(28316847000/60/60/24);
  else if ($flowUnit == "trilh�o p� c�bico/hora")       return $flow /(28316847000/60/60);
  else if ($flowUnit == "trilh�o p� c�bico/minuto")     return $flow /(28316847000/60);
  else if ($flowUnit == "trilh�o p� c�bico/segundo")    return $flow /(28316847000);
  else {
    return 0;
  }
}





?>
