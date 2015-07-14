(function () {
    'use strict';

    angular
        .module('formlyApp')
        .controller('MainController', MainController);

    function MainController(province) {

        var vm = this;
        vm.rental = {};
        vm.rentalFields = [
            {
                key: 'first_name',
                type: 'input',
                templateOptions: {
                    type: 'text',
                    label: 'First name',
                    placeholder: 'Enter your first name',
                    required: true
                }
            },
            {
                key: 'last_name',
                type: 'input',
                templateOptions: {
                    type: 'text',
                    label: 'Last name',
                    placeholder: 'Enter your last name',
                    required: true
                }
            },
            {
                key: 'email',
                type: 'input',
                templateOptions: {
                    type: 'email',
                    label: 'Email address',
                    placeholder: 'Enter email',
                    required: true
                }
            },
            {
                key: 'under25',
                type: 'checkbox',
                templateOptions: {
                    label: 'Are you under 25?',
                },
                hideExpression: '!model.email'
            },
            {
                key: 'province',
                type: 'select',
                templateOptions: {
                    label: 'Province/territory',
                    options: province.getProvinces()
                },
                hideExpression: '!model.email'
            },
            {
                key: 'license',
                type: 'input',
                templateOptions: {
                    label: 'Driver\'s License Number',
                    placeholder: 'Enter your drivers license number'
                },
                hideExpression: '!model.province',
                validators: {
                    driversLicense: function ($viewValue, $modelValue, scope) {
                        var value = $modelValue || $viewValue;
                        if (value) {
                            return validateDriversLicense(value)
                        }
                    }
                },
                expressionPropeties: {
                    'templateOptions.disabled': function ($viewValue, $modelValue, scope) {
                        if (scope.model.province === 'ontario') {
                            return false;
                        }
                        return true;
                    }
                }
            },
            {
                key: 'insurance',
                type: 'input',
                templateOptions: {
                    label: 'Insurance Policy Number',
                    placeholder: 'Enter your insurance policy number'
                },
                hideExpression: '!model.under25 || !model.province',
            }
        ];
        function validateDriversLicense(value) {
            return /[A-Za-z]\d{4}[\s|\-]*\d{5}$/.test(value);
        }


    }


})();
