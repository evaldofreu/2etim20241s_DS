import 'veiculo_model.dart';

class Automovel extends Veiculo {
  final String combustivel;

  Automovel({required super.identificacao, required this.combustivel});

  @override
  String consumo(double quilometros) {
    var media = combustivel == "gasolina" ? 12 : 9;
    var litros = quilometros / media;
    return "Seu consumo é de "
        "${litros.toStringAsFixed(2)}\L "
        "para percorrer $quilometros\KM";
  }

  @override
  String toString() {
    return "Automóvel: ${super.identificacao}";
  }
}
