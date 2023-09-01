function buscarKeyword(palabra,campo) {
    
	//var palabra = $('#keyword').val();

     ///alert(palabra+campo);
	//Contamos el valor del input mediante una condicional

		$.ajax({

			url: '../functions/buscarFiltros.php',
			type: 'POST',
			data: {palabra:palabra, campo:campo},
			success:function(data){
				$('#adminTable').show(data); 
				$('#adminTable').html(data);
				
				
			}
		 });   
        
}  

function details(palabra) {
    
    $.ajax({
		url: 'loadscreen.php',
		type: 'POST',
		data: {palabra:palabra},
		success:function(data){
			$('#adminTable').show(data); 
			$('#adminTable').html(data);
		}
	 });
    
	//var palabra = $('#keyword').val();

     ///alert(palabra+campo);
	//Contamos el valor del input mediante una condicional

		$.ajax({

			url: 'details.php',
			type: 'POST',
			data: {palabra:palabra},
			success:function(data){
				
				$('#wrapper').html(data);
				
				
			}
		 });   
        
}