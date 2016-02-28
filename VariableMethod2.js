function User(showed) {
    this.showed = showed;
    
    this.toggleShow = function() {
        var method = (this.showed) ? 'show' : 'hide';
        this[method]();
    };

    this.show = function() {
        print('User show');
    };

    this.hide = function() {
    	print('User hide');
    };
}

var user = new User(false);
user.toggleShow();