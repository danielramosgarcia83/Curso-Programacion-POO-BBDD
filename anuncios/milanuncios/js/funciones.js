function unomas()
{
	var contador;
	var cajetin;
	contador=parseInt($("input#numero").val());
	contador++;
	$("input#numero").val(contador);
	cajetin="<input type='file' name='archivo"+contador+"'>";
	$("div.add").append(cajetin);
}