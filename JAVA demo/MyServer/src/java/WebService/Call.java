/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

package WebService;

import javax.jws.WebMethod;
import javax.jws.WebParam;
import javax.jws.WebService;

/**
 *
 * @author Neybeans
 */
@WebService()
public class Call {

    /**
     * Web service operation
     */
    @WebMethod(operationName = "sayHello")
    public String sayHello(@WebParam(name = "name")
    String name) {
        //TODO write your implementation code here:
        return "HEllO "+name;
    }

}
