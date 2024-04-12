import 'automovel_model.dart';
import 'bicicleta_model.dart';
import 'moto_model.dart';
import 'veiculo_model.dart';

void main(List<String> args) {
  var listaVeiculo = <Veiculo>[
    Automovel(identificacao: "Civic Prata", combustivel: "gasolina"),
    Automovel(identificacao: "HB20 Chumbo", combustivel: "alcool"),
    Bicicleta(identificacao: "Verde"),
    Motocicleta(identificacao: "HONDA CG FAN", combustivel: "gasolina"),
  ];

  for (var veiculo in listaVeiculo) {
    print(veiculo);
    print(veiculo.consumo(100));
  }
}
