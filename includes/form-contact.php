<div id="success-msg" class="alert alert-success" style="display:none"></div>

<form id="contact">

    <h2>Skicka en fråga till oss! </h2>

    <div class="form-group row">
    
        <div class="col-md-6">
        
            <input type="text" name="Förnamn" placeholder="Förnamn" class="form-control">

        </div>
        <div class="col-md-6">
    
            <input type="text" name="Efternamn" placeholder="Efternamn" class="form-control">
    
        </div>

    </div>
        
    <div class="form-group row">
       
        <div class="col-md-6">
        
            <input type="tel" name="Mobil" placeholder="Mobil" class="form-control">

        </div>
        <div class="col-md-6">

            <input type="email" name="E-post" placeholder="E-post" class="form-control" required>

        </div>
 
    </div>
 
    <div class="form-group">
        
            <textarea name="Meddelande" class="form-control" placeholder="Din fråga" required></textarea>
    
    </div>

    <div class="form-group">
        
        <button type="submit" class="btn-block btn btn-secondary">Skicka din fråga</button>

    </div>
    
</form>

<script>

(function($){

    $('#contact').submit( function(){

        event.preventDefault(); 

        let endpoint = '<?php echo admin_url('admin-ajax.php'); ?>'

        let form = $('#contact').serialize();

        let formdata = new FormData();

        formdata.append('action','contact');

        formdata.append('contact', form);

        $.ajax(endpoint, {

            type: 'POST',
            data: formdata,
            processData: false,
            contentType: false,

            success: function(res){

                $('#contact').fadeOut(200);

                $('#success-msg').text('Tack för Ditt meddelande!').show();

                $('#contact').trigger('reset');

                $('#contact').fadeIn(2000);

            }, 

            error: function(err){



            }

        })

    })

})(jQuery)

</script>