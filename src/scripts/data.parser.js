class StaticMethodCall {
    constructor() {
        this.property;
    }
    setProperty(obj) {
        this.property = obj;
    }
    getProperty() {
        return this.property;
    } 
}
module.exports = new StaticMethodCall;
// StaticMethodCall.staticMethod();
// // 'Static method and static property has been called'

// StaticMethodCall.anotherStaticMethod();
// // 'Static method and static property has been called from another static method'
