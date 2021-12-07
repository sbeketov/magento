let config = {
    'map': {
        '*': {
            'mage/validation': 'Magetik_SampleModule/js/validation'
        }
    },
    config: {
        mixins: {
            'Magetik_SampleModule/js/validation': {
                'Magetik_SampleModule/js/validation-mixin': true
            }
        }
    }
};
