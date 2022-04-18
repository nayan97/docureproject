@if($errors -> any())
<p class="alert alert-danger">{{ $errors -> first()}} <button data-dismiss="alert" class="close">&times;</button></p>
@endif


								
   
     @if(Session::has('success'))
    <p class="alert alert-success">{{ Session::get('success')}} <button data-dismiss="alert" class="close">&times;</button></p>
    @endif
        
    <?php
                /**

    @if(Session::has('success')) 
    <p class="alert alert-success">{{ Session::get('success') }} <button data-dismiss="alert" class="close">&times;</button></p>
    @endif   */ ?>

    @if(Session::has('danger')) 
    <p class="alert alert-danger">{{ Session::get('danger') }} <button data-dismiss="alert" class="close">&times;</button></p>
    @endif

    @if(Session::has('info')) 
    <p class="alert alert-info">{{ Session::get('info') }} <button data-dismiss="alert" class="close">&times;</button></p>
    @endif