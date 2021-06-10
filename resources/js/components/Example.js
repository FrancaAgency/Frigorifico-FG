
import ReactDOM from 'react-dom';
import React ,{ useState }from 'react';
import { Form, FormGroup, Input, Button, Row, Col, Label } from 'reactstrap';
function Example() {
    const [inputList, setInputList] = useState([
        { 
           firstName: "", 
        }
     ]);
  
    // handle input change
     const handleInputChange = (e, index) => {
        const { name, value } = e.target;
        const list = [...inputList];
        list[index][name] = value;
        setInputList(list);
      };
    
      // handle click event of the Remove button
      const handleRemoveClick = index => {
        const list = [...inputList];
        list.splice(index, 1);
        setInputList(list);
      };
    
      // handle click event of the Add button
      const handleAddClick = () => {
        setInputList([...inputList, { firstName: "",}]);
      };
    return (
        <React.Fragment>
        <p className="formTitle">
           Formulario para medios
        </p>
        <Form className="mainFormBox" action ="{{ route('category.update',$category->id) }}"  method="POST">
           <FormGroup>
              <Label>
                 Cliente
              </Label>
              <Input className="" type="select" name="client" id="cliente" placeholder="Elige tu proyecto..." >
                 <option>Elige tu proyecto...</option>
                 <option>Merz</option>
                 <option>NovoNordisk</option>
                 <option>Coandes</option>
                 <option>Irma</option>
                 <option>FrigorificoFG</option>
              </Input>
           </FormGroup>
           <FormGroup>
              <Row>
                 <Label>
                    Presupuesto Total
                 </Label>
                 <Col md={4}>
                    <Input className="" type="text" name="budget" id="budget" />
                 </Col>
                 <Col md={4}>
                    <Input className="" type="select" name="budgetType" id="budgetType" >
                       <option>opcion1</option>
                       <option>opcion2</option>
                       <option>opcion3</option>
                       <option>opcion4</option>
                    </Input>
                 </Col>
              </Row>
           </FormGroup>
           <FormGroup>
              <Label>
                 Objetivo Digital
              </Label>
                 {inputList.map((x,i) =>{
                    return(
                       <Row>
                          <Col md={5}>
                             <Input
                                type="select"
                                name="firstName"
                                placeholder=""
                                value={x.firstName}
                                onChange={ e=> handleInputChange(e,i)}
                             >
                                <option value="">Selecciona...</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                                <option>4</option>
                                <option>5</option>
                                <option>6</option>
                                <option>7</option>
                                <option>8</option>
                                <option>9</option>
                                <option>10</option>
                                <option>11</option>
                                <option>12</option>
                                <option>13</option>
                                <option>14</option>
                                <option>15</option>
                             </Input>
                          </Col>
                          <Col md={2}>
                             <div className="">
                                {(inputList.length !== 1 && inputList.length -1 === i) && <Button onClick={() => handleRemoveClick(i)}>Remove</Button>}
                                {(inputList.length - 1 === i && inputList.length <=4) && <Button onClick={handleAddClick}>Add</Button>}
                             </div>
                          </Col>
                          </Row>
                    );
                 })
              }
              {/* <pre>
                 {JSON.stringify(inputList,null,2)}
              </pre> */}
           </FormGroup>
           {inputList.length > 1 &&<FormGroup>
              <Label>
                 Distribucion del Presupuesto
              </Label>
              <Input type="text" name="distribute" id="distribute" />
           </FormGroup>}
           <FormGroup>
              <Label>Duracion de la campaña</Label>
              <Row>
                 <Col md={3}>
                 <span>desde:</span>
                    <Input className="" type="date" name="dateStart" id="dateStart" />
                 </Col>
                 <Col md={3}>
                 <span>hasta:</span>
                    <Input className="" type="date" name="dateEnd" id="dateEnd" />
                 </Col>
              </Row>
           </FormGroup>
           <FormGroup>
              <Label>
                 Observaciones
              </Label>
              <Input className="" type="textarea" rows="5" placeholder="El cliente desea..."/>
           </FormGroup>
           <FormGroup>
              <Input type="submit" className="btn btn-primary" value="Enviar" />
           </FormGroup>
        </Form>
     </React.Fragment>
    );
}

export default Example;

if (document.getElementById('FormularioFranca')) {
    ReactDOM.render(<Example />, document.getElementById('FormularioFranca'));
}
