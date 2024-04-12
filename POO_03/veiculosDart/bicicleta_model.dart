import 'veiculo_model.dart';

class Bicicleta extends Veiculo {
  Bicicleta({required super.identificacao});

  @override
  String consumo(double quilometros) {
    return "Não consome nada para percorrer $quilometros\KM";
  }

  @override
  String toString() {
    return "Bicicleta: ${super.identificacao}";
  }
}
