"use strict";

// Class definition
var KTWizard4 = (function () {
    // Base elements
    var _wizardEl;
    var _formEl;
    var _wizardObj;
    var _validations = [];

    // Private functions
    var _initWizard = function () {
        // Initialize form wizard
        _wizardObj = new KTWizard(_wizardEl, {
            startStep: 1, // initial active step number
            clickableSteps: false, // allow step clicking
        });

        // Validation before going to next page
        _wizardObj.on("change", function (wizard) {
            if (wizard.getStep() > wizard.getNewStep()) {
                return; // Skip if stepped back
            }

            // Validate form before change wizard step
            var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

            if (validator) {
                validator.validate().then(function (status) {
                    if (status == "Valid") {
                        wizard.goTo(wizard.getNewStep());

                        KTUtil.scrollTop();
                    } else {
                        Swal.fire({
                            text: trans.requiredError,
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText: trans.Ok,
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light",
                            },
                        }).then(function () {
                            KTUtil.scrollTop();
                        });
                    }
                });
            }

            return false; // Do not change wizard step, further action will be handled by he validator
        });

        // Change event
        _wizardObj.on("changed", function (wizard) {
            KTUtil.scrollTop();
        });

        // Submit event
        _wizardObj.on("submit", function (wizard) {
            Swal.fire({
                text: trans.All_data_submitted,
                icon: "success",
                showCancelButton: true,
                buttonsStyling: false,
                confirmButtonText: trans.I_confirm,
                cancelButtonText: trans.I_reject,
                customClass: {
                    confirmButton: "btn font-weight-bold btn-primary",
                    cancelButton: "btn font-weight-bold btn-default",
                },
            }).then(function (result) {
                if (result.value) {
                    _formEl.submit(); // Submit form
                } else if (result.dismiss === "cancel") {
                    Swal.fire({
                        text: trans.Not_submitted,
                        icon: "error",
                        buttonsStyling: false,
                        confirmButtonText: trans.Ok,
                        customClass: {
                            confirmButton: "btn font-weight-bold btn-primary",
                        },
                    });
                }
            });
        });
    };

    var _initValidation = function () {
        // Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
        // Step 1
        _validations.push(
            FormValidation.formValidation(_formEl, {
                fields: {
                    name: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    family: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    identity_no: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    phone: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                            digit: {
                                message:
                                    "The phone number must contain only digits",
                            },
                            stringLength: {
                                min: 10,
                                max: 15,
                                message: trans.validPhoneDigitsError,
                            },
                            remote: {
                                method: "POST",
                                url: "/check/check-unique-phone",
                                message: trans.validPhoneUniqueError,
                                data: function () {
                                    return {
                                        phone: document.querySelector(
                                            '[name="phone"]'
                                        ).value,
                                        _token: document.querySelector(
                                            'input[name="_token"]'
                                        ).value,
                                    };
                                },
                            },
                        },
                    },
                    email: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                            emailAddress: {
                                message: trans.validEmailError,
                            },
                            remote: {
                                method: "POST",
                                url: "/check/check-unique-email",
                                message: trans.validEmailUniqueError,
                                data: function () {
                                    return {
                                        email: document.querySelector(
                                            '[name="email"]'
                                        ).value,
                                        _token: document.querySelector(
                                            'input[name="_token"]'
                                        ).value,
                                    };
                                },
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: "",
                    }),
                },
            })
        );

        // Step 2
        _validations.push(
            FormValidation.formValidation(_formEl, {
                fields: {
                    address: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    postcode: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    city_id: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    state_id: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    country_id: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: "",
                    }),
                },
            })
        );

        // Step 3
        _validations.push(
            FormValidation.formValidation(_formEl, {
                fields: {
                    avatar: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                            file: {
                                extension: "webp,jpg,jpeg,png",
                                type: "image/webp,image/jpeg,image/png",
                                maxSize: 5 * 1024 * 1024,
                                message: trans.invalidFileError,
                            },
                        },
                    },

                    passport: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                            file: {
                                extension: "webp,jpg,jpeg,png",
                                type: "image/webp,image/jpeg,image/png",
                                maxSize: 5 * 1024 * 1024,
                                message: trans.invalidFileError,
                            },
                        },
                    },
                    certificate: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                            file: {
                                extension: "webp,jpg,jpeg,png",
                                type: "image/webp,image/jpeg,image/png",
                                maxSize: 5 * 1024 * 1024,
                                message: trans.invalidFileError,
                            },
                        },
                    },
                },
                plugins: {
                    trigger: new FormValidation.plugins.Trigger(),
                    // Bootstrap Framework Integration
                    bootstrap: new FormValidation.plugins.Bootstrap({
                        //eleInvalidClass: '',
                        eleValidClass: "",
                    }),
                },
            })
        );
    };

    return {
        // public functions
        init: function () {
            _wizardEl = KTUtil.getById("kt_wizard");
            _formEl = KTUtil.getById("kt_form");

            _initWizard();
            _initValidation();
        },
    };
})();

jQuery(document).ready(function () {
    KTWizard4.init();
});
