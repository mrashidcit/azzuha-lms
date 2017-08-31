import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class Example extends Component {
    constructor(props){
        super(props)

        this.fetchSubjects = this.fetchSubjects.bind(this);
    }

        fetchSubjects() {
            axios.get('http://localhost:8000/subjects')
                .then( (response) => {
                    console.log("response" , response);
                })
                .catch((error) => {
                    console.log(error);
                });

        } // end fetchSubjects()



    render() {
        return (

            <div >
                I'm an example component!
                <button onClick={this.fetchSubjects}>Load Subjects</button>
            </div>

        );
    }
}



ReactDOM.render(
    <div>
        <Example />

    </div>
    ,
    document.getElementById('example')
);

/*

if (document.getElementById('example')) {
    ReactDOM.render(
        <Example />,
        document.getElementById('example')
    );
}
*/
