<p>{{$empresa[0]->nombre}}</p>


<p>{{$empresa[0]->direccion}}</p>

<p>{{$empresa[0]->telefono}}</p>

<p>** Recibo de Renta **</p>

<p>======================================</p>
<p>Entrada: {{$tiempo}}</p>
<p>Tarifa por hora: {{$tarifa}}</p>
<p>Por favor conservar el ticket hasta el pago</p>
<p>en caso de extravio se pagará una multa de $3</p>
<p>======================================</p>


<img src="data:image/png;base64,{{ base64_encode($code) }}">
<p>barcode: {{$folio}}</p>

<p>Gracias por su preferencia !</p>
