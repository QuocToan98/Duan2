   
<form action="" method="post" >
@csrf
    <h2>  login</h2>
    <div class="form-group">
        <label> Ten tai khoan </label>
        <input type="text" name="tk" placeholder="tai khoan" >
        @if($errors->has('tk'))
            <div class="alert alert-danger" role="alert">
            <strong>{{$errors->first('tk')}}</strong>
            </div>
        @endif
     </div>
     <div class="form-group">   
        <label> Mat khau </label>
        <input type="text" name="mk" placeholder="mat khau" >
        @if($errors->has('mk'))
            <div class="alert alert-danger" role="alert">
            <strong>{{$errors->first('mk')}}</strong>
            </div>
        @endif
    </div>
    <button type="submit"> dang nhap </button>
    
</form> 

