<script type="text/javascript">
    function EnableDisableTextBox() {
        var chkYes = document.getElementById("chkYes");
        var txtPassportNumber = document.getElementById("txtPassportNumber");
        txtPassportNumber.disabled = chkYes.checked ? false : true;
        if (!txtPassportNumber.disabled) {
            txtPassportNumber.focus();
        }
    }
</script>
<span>Do you have Passport?</span>
<label for="chkYes">
    <input type="radio" id="chkYes" name="chkPassPort" onclick="EnableDisableTextBox()" />
    Yes
</label>
<label for="chkNo">
    <input type="radio" id="chkNo" name="chkPassPort" onclick="EnableDisableTextBox()" />
    No
</label>
<hr />
Passport Number:
<input type="text" id="txtPassportNumber" disabled="disabled" />