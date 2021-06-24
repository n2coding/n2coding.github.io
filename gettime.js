function makeBooking(agent){

    bookingDate= agent.parameters.date.split('T')[0];
    bookingTime = agent.parameters.time.split('T')[1].split(':')[0];
    
    agent.add(`You have booked on ${availDate} at ${availTime}.`);
    
    }
    
    // A helper function that receives Dialogflow's 'date' and 'time' parameters and creates a Date instance.
    
    function convertParametersDate(date, time){
      var resultDate = new Date(Date.parse(date.split('T')[0]));
      return resultDate;
    }