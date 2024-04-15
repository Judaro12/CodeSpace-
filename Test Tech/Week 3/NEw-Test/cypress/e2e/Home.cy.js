describe('Computing Course', () => {
  it('Visit Edinburgh College Website and close cookies modal', () => {
    cy.visit('https://www.edinburghcollege.ac.uk')

    // Close the cookies modal
    // Assertion: Make sure the close button exist and click on it 
    cy.get('#ccc-close').should('exist').click().then(() => {
      cy.log('Cookis modal closed')
    }).then(() => {
      cy.log('Cookis modal not found, continuing...')
    })


    // Click on the 'Courses' link
    // Assertion: make sure the 'Courses' link exist and it clickable

    cy.contains('Courses').should('exist').and('be.visible').click()
    cy.log('Clicked on Courses link')

    cy.contains('Computing').should('exist').and('be.visible').click()
    cy.log('Clicked on Computing link')

    // Click on the 'Computing' link
    // Assertion: make sure 'Computing' link exist and is clickable



    // Check if we are in the 'computing' course page 
    // Assertion: Make sure the current URL is the 'Computing' course page URL
    cy.url().should('eq','https://www.edinburghcollege.ac.uk/courses/explore-subject-areas/computing')
    cy.log('Computing course Page')
  })
})

