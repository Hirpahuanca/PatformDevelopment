import {ApolloServer, gql} from 'apollo-server'


const persons=[
    {
        name: 'John',
        phone: '185453411',
        street: "kenedy",
        id: '12378923'

    },
        
    {
        name: 'Alice',
        phone: '987654321',
        street: 'Main Street',
        id: '78901234'
    },

    {
        name: 'David',
        phone: '456789012',
        street: 'Oak Avenue',
        id: '56789012'
    },

    {
        name: 'Sarah',
        phone: '123456789',
        street: 'Elm Street',
        id: '90123456'   
    },

    {
        name: 'Michael',
        phone: '234567890',
        street: 'Maple Road',
        id: '34567890'
    },


]

const typeDefinitions = gql` 
    type Person {
         name: String!
         phone: String!
         street: String!
         city: String!
         id: ID!
    }

    type Query {
        personCount: Int!
        allPersons: [Person]!
    }
`
const resolvers = {
    Query: {
        personCount: () => persons.length,
        allPersons: () => persons
    }
    
}

const server = new ApolloServer({
    typeDefs: typeDefinitions,
    resolvers
})

server.listen().then(({url})=>{
    console.log('Server ready at ${url}')
})