
 //mascara para telefone.
    $(document).ready(function(){
    var ThelephoneMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00000';
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(telefoneMaskBehavior.apply({}, arguments), options);
    }
};

$('input[name=telefonefixo]').mask(ThelephoneMaskBehavior, spOptions);
$('input[name=telefonemovel]').mask(ThelephoneMaskBehavior, spOptions);
        
        
    });
    //mascara para cpf
    $(document).ready(function(){
    var ThelephoneMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 11 ? '000.000.000-00' : '000.000.000-00';
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(telefoneMaskBehavior.apply({}, arguments), options);
    }
};

$('input[name=cpf]').mask(ThelephoneMaskBehavior, spOptions);        
        
    });

    //mascara para rg
    $(document).ready(function(){
    var ThelephoneMaskBehavior = function (val) {
  return val.replace(/\D/g, '').length === 7 ? '0.000.000' : '0.000.000';
},
spOptions = {
  onKeyPress: function(val, e, field, options) {
      field.mask(telefoneMaskBehavior.apply({}, arguments), options);
    }
};

$('input[name=rg]').mask(ThelephoneMaskBehavior, spOptions);        
        
    });

