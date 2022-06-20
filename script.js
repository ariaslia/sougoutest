$(function(){
    $('#form-ajax').on('submit', function(e){
        e.preventDefault();
        content = $('#content').val();
 
        $.ajax({
         type: "POST",
         url: "ajax.php",
         data: {"content": content},
         dataType: "json"
       }).done(function(data){
         //  console.log(data);
          let html = `
          <div>
            <p>${data.content}</p>
          </div>
          `;
          $('#container').append(html);
       }).fail(function(error){
          console.log(error);
       });
    });
 });
 