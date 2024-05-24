import 'divide.dart';
import 'multiplica.dart';
import 'soma.dart';

abstract class Operacao {
  final double fatorA;
  final double fatorB;

  Operacao(this.fatorA, this.fatorB);

  double resultado();

  factory Operacao.fromOperator(
      {required String operator,
      required double fatorA,
      required double fatorB}) {
    switch (operator) {
      case '*':
        return Multiplica(fatorA, fatorB);
      case '/':
        return Divide(fatorA, fatorB);
      case '+':
        return Soma(fatorA, fatorB);
      case '-':
        return Soma(fatorA, fatorB);
      default:
        throw 'Operação inválida';
    }
  }
}
