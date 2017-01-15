// Wait for the DOM to be ready
$(function() {


// ========================================================================
//  form create usuario > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-usuaruo-create']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      cedula: "required",
      login: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      contrasena: {
        required: true,
        minlength: 6
      },
      r_contrasena:{
        required: true,
        equalTo: "email",

      },
      tipo : "required",
      estatus : "required",

    },
    // Specify validation error messages
    messages: {
      cedula: "*Seleccione la Cedula*",
      login: "Ingrese el login",
      contrasena: {
        required: "Ingrese la contrasena",
        minlength: "la contrasena debe tener un minimo de 6 caracteres de longitud"
      },
      email:{
        required:  "Ingrese el correo",
         email: "debe ser un correo valido",
      },
      r_contrasena:{
        required: "repita la contrasena",
        equalTo: "las contraseñas no son iguales",

      },
      tipo : "*Seleccione el tipo*",
      estatus : "*Seleccione el estatus*",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

// ========================================================================
//  form edit usuario > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-usuaruo-edit']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
   
      tipo : "required",
      estatus : "required",

    },
    // Specify validation error messages
    messages: {    
      tipo : "*Seleccione el tipo*",
      estatus : "*Seleccione el estatus*",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });


// ========================================================================
//  form create personal > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-personal-create']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
   
      nombre : "required",
      apellido : "required",
      cedula : {
        required : true,
        number : true,
      },
      cod_personal : "required",
      fecha_n : "required",
      correo : "required",
      cargo : "required",
      status : "required",


    },
    // Specify validation error messages
    messages: {    
      nombre : "Ingrese el nombre",
      apellido : "Ingrese el apellido",
      cedula : {
        required : "Ingrese la cedula",
        number : "solo numeros",
      },
      cod_personal : "Ingrese el codigo",
      fecha_n : "Ingrese la fecha",
      correo : "Ingrese el correo",
      cargo : "Ingrese el cargo",
      status : "Ingrese el estatus",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



// ========================================================================
//  form edit personal > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-personal-edit']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
   
      nombre : "required",
      apellido : "required",
      cedula : {
        required : true,
        number : true,
      },
      cod_personal : "required",
      fecha_n : "required",
      correo : "required",
      cargo : "required",
      status : "required",


    },
    // Specify validation error messages
    messages: {    
      nombre : "Ingrese el nombre",
      apellido : "Ingrese el apellido",
      cedula : "Ingrese la cedula",
      cod_personal : "Ingrese el codigo",
      fecha_n : "Ingrese la fecha",
      correo : "Ingrese el correo",
      cargo : "Ingrese el cargo",
      status : "Ingrese el estatus",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



// ========================================================================
//  form persimo  > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-permiso']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
   
      tipo : "required",
      motivo : "required",
      cedula : "required",
      inicio : "required",
      fin : "required",
    },
    // Specify validation error messages
    messages: {    
      tipo : "Ingrese el tipo",
      motivo : "Ingrese el motivo",
      cedula : "*Seleccione la Cedula*",
      inicio : "Ingrese el inicio",
      fin : "Ingrese el fin",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



// ========================================================================
//  form vacaciones  > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-vacaciones']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
   
      estado : "required",
      cedula : "required",
      inicio : "required",
      fin : "required",
    },
    // Specify validation error messages
    messages: {    
      estado : "*Seleccione el estado*",
      cedula : "*Seleccione la Cedula*",
      inicio : "Ingrese el inicio",
      fin : "Ingrese el fin",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

  // ========================================================================
//  form vacaciones find > rules
// ========================================================================

  // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-vacaciones-find']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
   
      estado : "required",
      cedula : "required",
    },
    // Specify validation error messages
    messages: {    
      estado : "*Seleccione el estado*",
      cedula : "*Seleccione la Cedula*",
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });

  // ========================================================================
//  form generar reporte > rules
//
 // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-reporte']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
   
      
      cedula : "required",
      observacion : "required",
      desde : "required",
      hasta : "required",

    },
    // Specify validation error messages
    messages: {    
      observacion : "*Seleccione el tipo*",
      cedula : "*Seleccione la Cedula*",
      desde : "*Seleccione la fecha desde*",
      hasta : "*Seleccione la fecha hasta*"
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });



// ========================================================================
//  form generar reporte > rules
//
 // Initialize form validation on the registration form.
  // It has the name attribute "registration"
  $("form[name='formulario-reporte-usuario']").validate({
    // Specify validation rules
    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side        
      cedula : "required",
    },
    // Specify validation error messages
    messages: {    
      cedula : "*Seleccione la Cedula*", 
    },
    // Make sure the form is submitted to the destination defined
    // in the "action" attribute of the form when valid
    submitHandler: function(form) {
      form.submit();
    }
  });


});