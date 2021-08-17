angular.module('mainApp.services',[])

.factory('Main', function($http){
  var base_url = 'http://' + window.location.hostname +':8080';
  // var base_url = 'https://192.168.1.10';
  // var base_url = 'http://192.168.1.9';
  // var base_url = 'https://192.168.43.245';11
  // var base_url = 'http://localhost';
  
  return{
    issue_ris: function(data) {
      console.log(data);
      return $http.post(base_url +'/rjmed/leave/issue_ris', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
    daily_report_financial: function(data) {
      console.log(data);
      return $http.post(base_url +'/rjmed/report/daily_report_financial', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },     
     get_spec_meds1: function(data) { 
      // console.log(data);
      return $http.post(base_url +'/rjmed/leave/get_spec_meds', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
      get_specific_order: function(data) { 
      // console.log(data);
      return $http.post(base_url +'/rjmed/leave/get_specific_order', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
      get_sspecific_order: function(data) { 
      // console.log(data);
      return $http.post(base_url +'/rjmed/leave/get_sspecific_order', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
      delete_med: function(data) {
      // console.log(data);
      return $http.post(base_url +'/rjmed/leave/delete_med', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
     edit_meds: function(data) { 
      // console.log(data);
      return $http.post(base_url +'/rjmed/leave/edit_meds', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
     add_med: function(data) {
      // console.log(data);
      return $http.post(base_url +'/rjmed/leave/add_med', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
     add_stock: function(data) {
      // console.log(data);
      return $http.post(base_url +'/rjmed/leave/add_stock', data)
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log(data);
          
        })
      },
      get_meds: function(){
        return $http.get(base_url + '/rjmed/leave/get_meds')
          .then(function(response){
            return response.data;
          })
      },
      get_meds_all: function(){
        return $http.get(base_url + '/rjmed/leave/get_meds_all')
          .then(function(response){
            return response.data;
          })
      },
      get_orders: function(){
        return $http.get(base_url + '/rjmed/leave/all_get_orders')
          .then(function(response){
            return response.data;
          })
      },
      get_join_orders: function(data){
        return $http.post(base_url + '/rjmed/leave/get_join_orders',data)
          .then(function(response){
            return response.data;
          })
      },
     get_all_inventory: function() {
      return $http.post(base_url +'/rjmed/leave/get_all_inventory')
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log();
          
        })
      },     
     get_all_customers: function() {
      return $http.get(base_url +'/rjmed/leave/get_all_customers')
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log();
          
        })
      }, 
      get_transaction: function() {
      return $http.post(base_url +'/rjmed/leave/get_transaction')
        .then(function(response) {
          return response.data;
        }, function(response) {
          console.log();
          
        })
      },
    daily_report_meds: function(data) {
      return $http.post(base_url +'/rjmed/report/daily_report_meds', data)
        .then(function(response) {
          return response;
        }, function(response) {
          // console.log(response.data);
        })
      },
    daily_report_meds_stock_in: function(data) {
      return $http.post(base_url +'/rjmed/report/daily_report_meds_stock_in', data)
        .then(function(response) {
          return response;
        }, function(response) {
          // console.log(response.data);
        })
      },
      daily_report1: function(data) {
        return $http.post(base_url +'/rjmed/report/daily_report1', data)
          .then(function(response) {
            return response;
          }, function(response) {
            // console.log(response.data);
          })
        },
      delete_order: function(data) {
          // console.log(data);
          return $http.post(base_url +'/rjmed/leave/delete_order', data)
            .then(function(response) {
              return response.data;
            }, function(response) {
              console.log(data);
            })
          },
      edit_trans: function(data) {
            // console.log(data);
            return $http.post(base_url +'/rjmed/leave/edit_trans', data)
              .then(function(response) {
                return response.data;
              }, function(response) {
                console.log(data);
                
              })
            }, 
    monthly_report_meds: function(data) {
      return $http.post(base_url +'/rjmed/report/monthly_report_meds',data)
        .then(function(response) {
          return response;
        }, function(response) {
          // console.log(response.data);
        })
      }
   }
})