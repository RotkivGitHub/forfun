<div class="contactUs" id="contactUs">
    <form class="form-horizontal contactUs--form" id="contactForm">
        <div class="contactUs--closeButton" id="contactUs--closeButton">
            <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
        </div>
        <br>
        <div class="form-group">
            <label for="inputName" class="col-sm-2 control-label">Ваше имя</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Как вас называть?">
            </div>
        </div>
        <div class="form-group">
            <label for="inputEmail" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="inputEmail"  name="email" placeholder="Не обязательно. Если хотите, чтобы мы ответили">
            </div>
        </div>
        <textarea class="form-control" rows="3"  name="message" ></textarea>
        <br>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-default" id="sendMessage">Написать нам!</button>
            </div>
        </div>
    </form>

</div>