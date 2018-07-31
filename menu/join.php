
<div class="center">
    <h1><i class="fas fa-address-card"></i>&nbsp;&nbsp;Join</h1><br>
    <form method="POST" action="./process/join">
        <div class="form-group">
            <label>ID</label>
            <input type="text" name="id" class="form-control" placeholder="5~10 글자, 알파벳 소문자와 숫자로 이루어져야함" required>
        </div>
        <div class="form-group">
            <label>PW</label>
            <input type="password" name="pw" class="form-control" placeholder="5~15 글자, 알파벳이나 숫자, 특수문자(!@_*) 로 이루어져야함" required>
        </div>
        <div class="form-group">
            <label>EMAIL</label>
            <input type="email" name="email" class="form-control" placeholder="자신의 이메일을 적어주세요" required>
        </div>
        <div class="form-group">
            <label>Homepage</label>
            <input type="text" name="comment" class="form-control" placeholder="하고 싶은 말이나 자신의 홈페이지를 적어주세요.">
        </div>
        <button type="submit" class="btn btn-dark">Join</button>
    </form>
</div>