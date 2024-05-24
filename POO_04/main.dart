import 'operacao.dart';

void main(List<String> args) {
  final expressao = "5+30/40-2";
  var operadores = '/*+-';

  var partes = [];
  String fator = "";
  for (var c = 0; c < expressao.length; c++) {
    String char = expressao[c];
    if (operadores.contains(char)) {
      partes.add(fator);
      partes.add(char);
      fator = "";
    } else {
      fator += char;
    }
    ;
  }
  partes.add(fator);
  print(partes);

  while (partes.length > 1) {
    for (var i = 0; i < operadores.length; i++) {
      var operador = operadores[i];
      var igual = 0.0;
      var resolvido = false;
      for (var p = 0; p < partes.length; p++) {
        var parte = partes[p];
        if (operador.contains(parte)) {
          switch (operador) {
            case '*':
              igual = double.parse(partes[p - 1]) * double.parse(partes[p + 1]);
            case '/':
              igual = double.parse(partes[p - 1]) / double.parse(partes[p + 1]);
            case '+':
              igual = double.parse(partes[p - 1]) + double.parse(partes[p + 1]);
            case '-':
              igual = double.parse(partes[p - 1]) - double.parse(partes[p + 1]);
          }
          partes[p - 1] = igual.toString();
          partes.removeAt(p);
          partes.removeAt(p);
          print(partes);
          resolvido = true;
          break;
        }
      }
      if (resolvido) {
        break;
      }
    }
  }
  print("Resultado da Expressao ${double.parse(partes[0]).toStringAsFixed(2)}");
}
