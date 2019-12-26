function myFunc(){
	$.ajax({
  method: 'post',
  dataType: 'json',
  async : true,
  // data: {da: 6},
  url: 'http://localhost:8080/mis/index.php/Welcome/book_show',
  success: function (response) {
    console.log(response[0].id);
      for(var i=0;i<response.length;i++){
        var html="<td>"+response[i].id+"</td>"+"<td>"+response[i].book_name+"</td>"+"<br>";
  	    $('#show').append(html);
      }
    }
  });
}