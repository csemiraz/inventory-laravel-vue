import {
    Form as VeeForm,
    Field as VeeField,
    defineRule,
    ErrorMessage,
    configure
} from 'vee-validate';

import {
    required,
    min,
    max,
    email,
    alpha_spaces as alphaSpaces,
    min_value as minVal,
    max_value as maxVal,
    confirmed,
    not_one_of as excluded
} from '@vee-validate/rules';


export default{
    install(app){
        app.component('VeeForm', VeeForm);  // vee-form
        app.component('VeeField', VeeField);  // vee-field
        app.component('ErrorMessage', ErrorMessage);  // error-message

        defineRule('required', required);
        defineRule('checkbox', required);
        defineRule('email', email);
        defineRule('min', min);
        defineRule('max', max);
        defineRule('alpha_spaces', alphaSpaces);
        defineRule('min_value', minVal);
        defineRule('max_value', maxVal);
        defineRule('passwords_mismatch', confirmed);
        defineRule('excluded', excluded);

        configure({
            generateMessage: (ctx) => {
                const message = {
                    required: `The field ${ctx.field} is required.`,
                    min: `The field ${ctx.field} is too short`,
                    max: `The field ${ctx.field} is too long.`,
                    alpha_spaces: `The field ${ctx.field} may only contains alphabatical characters and spaces`,
                    email: `The field ${ctx.field} is must be a valid email address`,
                    min_value: `The field ${ctx.field} is too low.`,
                    max_value: `The field ${ctx.field} is too high.`,
                    excluded: `You are now allowed to use this value for the field ${ctx.field}.`,
                    passwords_mismatch: `The passwords don't match`,
                    checkbox: `You must check/seleect a terms of service`,
                }
            }
        })
    }
}
