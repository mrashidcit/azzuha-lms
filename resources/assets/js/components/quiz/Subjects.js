import React, { Component } from 'react';

export default class Subjects extends Component {
    constructor(){
        super();
        this.state = {
            subjects: '',
            status: false
        };

        this.fetchSubjects = this.fetchSubjects.bind(this);

        this.fetchSubjects();
    }

    



    fetchSubjects() {
        axios.get('http://localhost:8000/subjects')
            .then( (response) => {
                console.log("response" , response.data['subjects'] );
                this.setState({
                    subjects: response.data['subjects'],
                    status: true
                });
            })
            .catch((error) => {
                console.log(error);
            });

    } // end fetchSubjects()




    render() {

        return (

            <div className="form-group row">
                <label className="cols-sm-2 col-form-label">Subject:</label>
                <div className="col-sm-10">


                    <SubjectsList
                        subjects={this.state.subjects}
                        status={this.state.status}
                    />

                </div>

                <button onClick={this.fetchSubjects}>Load Subjects</button>
            </div>

        );
    }
}

// return list of given subjects
function List(){

    return ( <h3>List</h3> );
}

class SubjectsList extends Component {
    constructor (props) {
        super(props);

    }

    render() {

        if(!this.props.status){
            return ( <h3>Loading...</h3> );

        }

        return (
            <select name="" id="">

            </select>
            <List  />
        );
    }
}

/*
class SubjectsList extends Component(props){
    constructor(props){
        super(props);


    }

    List(props) {
        if (!props.status){

            return ( <span>Loading....</span> );
        }

        const subjects = this.props.subjects;
        const listItems = subjects.map((subject) =>
            <li>{subject.id}</li>
        );



        return (

            <ul name="subject_id"  id="subject_id">
                {listItems}
            </ul>

        );

    }

    render() {
        return (
            <h3>Subjects</h3>

        );
    }


}
*/