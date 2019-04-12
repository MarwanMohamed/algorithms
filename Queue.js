class Node {
    constructor(value) {
        this.value = value;
        this.next = null;
    }
}

class Queue {
    constructor() {
        this.first = null;
        this.last = null;
        this.length = 0;
    }

    peek() {
        return this.first;
    }
    
    enqueue(value) {
        const newNode = new Node(value);
       if(!this.first) {
           this.first = newNode;
           this.last = newNode;
       } else {
           this.last.next = newNode;
           this.last = newNode;
       }
        this.length++;
        return this;
    }

    dequeue() {
        if(!this.last) {
            return null;
        }
        if(this.first == this.last) {
            this.last = null;
        }
        this.first = this.first.next;
        this.length--;
        return this;
    }
}


const myStack = new Queue();
myStack.enqueue('one');
myStack.enqueue('two');
myStack.enqueue('three');
myStack.enqueue('four');
// myStack.peek();
myStack.dequeue();
myStack.dequeue();
myStack.dequeue();
