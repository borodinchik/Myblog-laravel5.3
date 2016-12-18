@include('layouts.header')
<style>
    .form-inline{
        display: flex;
        flex-direction: column;
        text-align: center;
        padding-top: 50px;
    }
    input{
        padding-top: 15px;
    }
    .btn {
        width: 150px;
        margin: 0 auto;
    }
</style>
<form class="form-inline">
    <div class="form-group">
        <input type="text" class="form-control" id="exampleInputName2" placeholder="Login">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Password">
    </div>
    <div class="form-group">
        <input type="password" class="form-control" id="exampleInputEmail2" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-default">Sing up</button>
</form>
@include('layouts.footer')