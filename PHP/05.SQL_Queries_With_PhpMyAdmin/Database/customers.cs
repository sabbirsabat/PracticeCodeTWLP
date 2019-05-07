using System;
using System.Collections;
using System.Collections.Generic;
using System.Text;
namespace Velvee
{
    #region Customers
    public class Customers
    {
        #region Member Variables
        protected int _id;
        protected string _firstName;
        protected string _lastName;
        protected string _address;
        protected string _email;
        protected string _city;
        protected string _division;
        protected string _zipcode;
        protected int _age;
        #endregion
        #region Constructors
        public Customers() { }
        public Customers(string firstName, string lastName, string address, string email, string city, string division, string zipcode, int age)
        {
            this._firstName=firstName;
            this._lastName=lastName;
            this._address=address;
            this._email=email;
            this._city=city;
            this._division=division;
            this._zipcode=zipcode;
            this._age=age;
        }
        #endregion
        #region Public Properties
        public virtual int Id
        {
            get {return _id;}
            set {_id=value;}
        }
        public virtual string FirstName
        {
            get {return _firstName;}
            set {_firstName=value;}
        }
        public virtual string LastName
        {
            get {return _lastName;}
            set {_lastName=value;}
        }
        public virtual string Address
        {
            get {return _address;}
            set {_address=value;}
        }
        public virtual string Email
        {
            get {return _email;}
            set {_email=value;}
        }
        public virtual string City
        {
            get {return _city;}
            set {_city=value;}
        }
        public virtual string Division
        {
            get {return _division;}
            set {_division=value;}
        }
        public virtual string Zipcode
        {
            get {return _zipcode;}
            set {_zipcode=value;}
        }
        public virtual int Age
        {
            get {return _age;}
            set {_age=value;}
        }
        #endregion
    }
    #endregion
}