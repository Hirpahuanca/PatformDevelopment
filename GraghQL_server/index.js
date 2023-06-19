import {ApolloServer, gql} from 'apollo-server'
import {v1 as uuid} from 'uuid'

//incializacion de datos
const persons=[
    {
        name: 'John',
        phone: '185453411',
        street: "kenedy",
        city: "San floated",
        id: '12378923'

    },
        
    {
        name: 'Alice',
        phone: '987654321',
        street: 'Main Street',
        city: "florida",
        id: '78901234'
    },

    {
        name: 'David',
        phone: '456789012',
        street: 'Oak Avenue',
        city: "lima",
        id: '56789012'
    },

    {
        name: 'Sarah',
        phone: '123456789',
        street: 'Elm Street',
        city: "florida",
        id: '90123456'   
    },

    {
        name: 'Michael',
        phone: '234567890',
        street: 'Maple Road',
        city: "florida",
        id: '34567890'
    },


]
///descripcion de peticiones
const typeDefinitions = gql` 
    type Person {
         name: String!
         phone: String!
         street: String!
         city: String!
         address: String!
         id: ID!
    }

    type Query {
        personCount: Int!
        allPersons: [Person]!
        findPerson(name: String!): Person
    }

    type Mutation {
        addPerson(
            name: String!
            phone: String!
            street: String!
            city: String!
        ):Person
    }
`

//recuperacion de datos
const resolvers = {
    Query: {
        personCount: () => persons.length,
        allPersons: () => persons,
        findPerson: (root, args) => {
            const {name} = args
            return persons.find(persons => persons.name === name)
        }
    },
    Mutation:{
        addPerson: (root, args)=> {
            const person = {...args,id:uuid()}
            persons.push(person) //actualizacion de db
            return person
        }
    },
    //creacion de nuevos campos
    Person: {
    address: (root) => `${root.street},${root.city}`,
    

    }
}

//creando servidor
const server = new ApolloServer({
    typeDefs: typeDefinitions,
    resolvers
})

//inicializacion de servidor
server.listen().then(({url})=>{
    console.log('Server ready at ${url}')
})