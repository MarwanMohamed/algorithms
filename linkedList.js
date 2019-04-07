
class Linkedlist {

	constructor(value) {
	    this.head = {
	      value: value,
	      next: null
	    };
	    this.tail = this.head;
	    this.length = 1;
  	}

		append(value) {
	    const newNode = {
	        value: value,
	        next:null
	    }
	    
	    this.tail.next = newNode;
	    this.tail = newNode;
	    this.length ++;
	    return this;
	}

	prepend(value) {
		const firstNode = {
		  value: value,
		  next: this.head
		}
		this.head = firstNode;
		this.length ++;
	}

	printList() {
	  	const array = [];
		let currentNode = this.head;
		while(currentNode !== null){
		  array.push(currentNode.value)
		  currentNode = currentNode.next
		}
			return array;
	}

	insert(index, value) {
		if(index >= this.length) {
		    return this.append(value);
		}

		const newNode = {
		    value: value,
		    next:null
		}
		const leader = this.traverseToIndex(index -1);
		const holder = leader.next;
		leader.next = newNode;
		newNode.next = holder
		this.length++
	}

	traverseToIndex(index) {
		let counter = 0;
		let currentNode = this.head;
		while(counter != index) {
		currentNode = currentNode.next;
		counter++
		}
		return currentNode;
	}

    remove(index) {
        const leader = this.traverseToIndex(index -1);
        const removedNode = leader.next;
        leader.next = removedNode.next;
        this.length--
        return this.printList();
    }

    reverse() {
    	if (!this.head.next) {
    		return this.head;
    	}

    	let first = this.head;
    	this.tail = this.head;
    	let second = first.next;
    	while(second) {
    		const temp = second.next;
    		second.next = first;
    		first = second;
    		second = temp;
    	}

    	this.head.next = null;
    	this.head = first;
        return this.printList();
    }

}

let mylinkedlist = new Linkedlist(3);

mylinkedlist.append(4);
mylinkedlist.append(5);
mylinkedlist.prepend(2);
mylinkedlist.prepend(1);
// mylinkedlist.insert(22, 88);
// mylinkedlist.insert(3, 99);
// mylinkedlist.remove(3);
mylinkedlist.reverse();

		
