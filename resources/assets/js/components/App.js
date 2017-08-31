import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import Quiz from './quiz/Quiz';
import Subjects from './quiz/Subjects';


export default class App extends Component {
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
                <Subjects />
            </div>

        );
    }
}



ReactDOM.render(
    <div>
        <App />

    </div>
    ,
    document.getElementById('app')
);

/*

 if (document.getElementById('example')) {
 ReactDOM.render(
 <Example />,
 document.getElementById('example')
 );
 }
 */
