
<form method="post" action="/email">
    @csrf
    <input name="to" type="text" placeholder="to" value="testosteron@armyspy.com">
    <input name="head" type="text" placeholder="head" value="Test">
    <input name="content" type="text" placeholder="content" value="Test Content">

    <input name="logo" type="radio" value="https://www.sithcult.com/img/logo/logo_white.png" checked> <img src="https://www.sithcult.com/img/logo/logo_white.png">
    <input name="logo" type="radio" value="https://www.sithcult.com/img/logo/holobook_web.jpg"><img src="https://www.sithcult.com/img/logo/holobook_web.jpg">
    <input name="logo" type="radio" value="https://www.aichner-christian.com/img/logo/logo_web.png"><img src="https://www.aichner-christian.com/img/logo/logo_web.png">
    <button type="submit">Submit</button>
</form>

