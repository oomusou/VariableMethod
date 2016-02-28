function User(showed) {
    this.showed = showed;

    this.toggleShow = function() {
    	if (this.showed) {
    		this.show();
    	} else {
    		this.hide();
    	} 
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