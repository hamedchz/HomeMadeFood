"use strict";

// Class definition
var KTWizard1 = (function () {
    // Base elements
    var _wizardEl;
    var _formEl;
    var _wizardObj;
    var _validations = [];

    // Private functions
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
                    category_id: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    languages: {
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

        // Step 2
        _validations.push(
            FormValidation.formValidation(_formEl, {
                fields: {
                    city_id: {
                        validators: {
                            notEmpty: {
                                message: trans.emptyError,
                            },
                        },
                    },
                    district_id: {
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
                    address: {
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
                    business_hours: {
                        validators: {
                            callback: {
                                message: trans.emptyError,
                                callback: function (input) {
                                    // Get the value of the input field
                                    const value = input.value;

                                    // If it's a string, try to parse it as JSON array
                                    if (typeof value === "string") {
                                        try {
                                            const arr = JSON.parse(value);
                                            return (
                                                Array.isArray(arr) &&
                                                arr.length > 0
                                            );
                                        } catch (e) {
                                            return false;
                                        }
                                    }

                                    // If it's already an array
                                    return (
                                        Array.isArray(value) && value.length > 0
                                    );
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
    };

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
                    Swal.fire({
                        title: trans.waiting,
                        onOpen: function () {
                            Swal.showLoading();
                        },
                    });
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

    return {
        // public functions
        init: function () {
            _wizardEl = KTUtil.getById("kt_wizard");
            _formEl = KTUtil.getById("kt_form");

            _initValidation();
            _initWizard();
        },
    };
})();

jQuery(document).ready(function () {
    KTWizard1.init();
});
