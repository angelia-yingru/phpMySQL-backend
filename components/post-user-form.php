<!-- 表單 -->
<form action="../api/user/post.php" method="POST">
    <!-- 普通欄位 -->
    <div class="mb-3">
        <label for="inpit1" class="form-label">name</label>
        <input type="text" class="form-control" name="name" id="inpit1" placeholder="輸入">
        <label for="inpit1" class="form-label">account</label>
        <input type="text" class="form-control" name="account" id="inpit1" placeholder="輸入">
        <label for="inpit1" class="form-label">password</label>
        <input type="text" class="form-control" name="password" id="inpit1" placeholder="輸入">
        <label for="inpit1" class="form-label">gender</label>
        <input type="text" class="form-control" name="gender" id="inpit1" placeholder="輸入">
        <label for="inpit1" class="form-label">birthday</label>
        <input type="date" class="form-control" name="birthday" id="inpit1" placeholder="輸入">
        <label for="inpit1" class="form-label">phone</label></label>
        <input type="text" class="form-control" name="phone" id="inpit1" placeholder="輸入">
        <label for="inpit1" class="form-label">photo</label></label>
        <input type="text" class="form-control" name="photo" id="inpit1" placeholder="輸入">
     </div>
    <!-- 送出按鈕 -->
    <div class="text-center">
        <button type="submit" class="btn btn-secondary btn-lg ">submit</button>
    </div>
</form>