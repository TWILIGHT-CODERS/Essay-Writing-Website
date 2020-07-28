<div class="form-group">
    <label id="captcha_label" for="captcha">
        Captcha: {{ config('blogetc.captcha.basic_question', '[error - undefined captcha question]' )}}
    </label>
    <input type="text" required class="" name="captcha"
           id="captcha" placeholder="" value="{{ old('captcha') }}">
</div>
