# onion_architecture
<br>
<img src="./onion-design-diagram.png">

<br>

[Getting Started](#getting-started)
<br>
[Domain Model](#domain-model)
<br>
[Domain Service](#domain-service)
<br>
[Application Service](#application-service)
<br>
[User Interface](#user-interface)
<br>
[Infrastructure](#infrastructure)
<br>
[External Libraries](#external-libraries)
<br>
[Tests](#tests)

### Getting Started 
<p>Always start building your application from the core (Domain Model) and work outwards towards the outer layers (Infrastructure).</p>

### Domain Model
<p>This layer contains pure models & entities, They interact with each other and nothing else.</p>

### Domain Service
<p>These are things like:</p>
<ul>
 <li>Factories</li>
 <li>Repositories</li>
 <li>Other services that use the core domain model</li>
</ul>
<p>The Domain Model & Domain Service make up the core/business logic.</p>

### Application Service
<p>In traditional MVC, this is your controller layer.</p>
<ul>
 <li>it's also the router</li>
 <li>it may use other application services e.g (authentication, data parsers, translators)</li>
</ul>
<p>Nothing in the application should depend on this layer, it must be swappable!</p>

### User Interface
<p>The UI has nothing dependent upon it, but is dependent on every deeper layer.</p>

### Infrastructure
<p>This layer is important, it provides for our domain.</p>
<p>It uses data sources like:</p>
<ul>
 <li>Databases</li>
 <li>Web services (API's)</li>
</ul>
<p>They are used by infrastructure but aren't part of our onion.</p>
<p>They are simply data providers, The infrastructure relies on the Domain Services & Domain Models.</p>
<p>The infrastructure also relies upon the Application Service layer.</p>

### External Libraries
<p>They sit outside the onion and are used similar to the infrastructure by the application layer.</p>
<p>Some libraries include:</p>
<ul>
 <li>Google maps API</li>
 <li>Facebook API</li>
</ul>

### Tests
<p>These sit outside the onion, the application should never rely on the tests to properly function.</p>