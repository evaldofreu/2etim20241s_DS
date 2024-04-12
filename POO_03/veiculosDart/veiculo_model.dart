abstract class Veiculo {
  final String identificacao;

  Veiculo({required this.identificacao});

  String consumo(double quilometros);

  @override
  String toString();
}
