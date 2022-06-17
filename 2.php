<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<div data-id="root" style="background: red"> root <span data-id="id1" style="background: lightblue;">id1</span>
    <div data-id="id2" style="background: green;"> id2 <div data-id="id3" style="background: yellow;"> id3</div>
    </div>
</div>

<script>
    $('div[data-id="root"] div').on('click', function() {
        if($(this).data("id")){
            console.log($(this).data("id"));
        }
    });
</script>