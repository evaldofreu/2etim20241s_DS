import 'veiculo_model.dart';

class Motocicleta extends Veiculo {
  String combustivel;

  Motocicleta({required super.identificacao, required this.combustivel});

  @override
  String consumo(double quilometros) {
    var media = combustivel == "gasolina" ? 24 : 20;
    var litros = quilometros / media;
    return "Seu consumo é de "
        "${litros.toStringAsFixed(2)}\L "
        "para percorrer $quilometros\KM";
  }

  @override
  String toString() {
    return "Moto: ${super.identificacao}";
  }
}
