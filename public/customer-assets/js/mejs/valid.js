'use strict'

window.validateForm = function () {
  return {
    fullname: '',
    email: '',
    validation: {
      fullname: {
        rule: {
          required: function (field) {
            if (field) {
              return { error: false, message: ''}
            } else {
              return { error: true, message: 'This field is required.'}
            }
          },
          minLength: function (field, value = 2) {
            if (field && field.length >= value) {
              return { error: false, message: ''}
            } else {
              return { error: true, message: `This field must have minimum ${value} characters length.`}
            }
          }
        },
        error: true,
        message: ''
      },
      email: {
        rule: {
          required: function (field) {
            if (field) {
              return { error: false, message: ''}
            } else {
              return { error: true, message: 'This field is required.'}
            }
          },
          email: function (field) {
            const rgx = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
            if (rgx.test(field)) {
              return { error: false, message: ''}
            } else {
              return { error: true, message: 'This field has wrong email address format.'}
            }
          }
        },
        error: true,
        message: ''
      },
     
    },
    validate (field) {
      for (const key in this.validation[field].rule) {
        const validationResult = this.validation[field].rule[key](this[field])
        if (validationResult.error) {
          this.validation[field].error = true
          this.validation[field].message = validationResult.message
          break
        }
        this.validation[field].error = false
        this.validation[field].message = ''
        continue
      }
    }
  }
}