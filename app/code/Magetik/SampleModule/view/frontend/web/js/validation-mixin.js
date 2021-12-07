define(function () {
    'use strict';

    let extension = {
        isValid: () => true,
    }

    return (target) => target.extend(extension);
});
