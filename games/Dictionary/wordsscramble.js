const words = [
    {
        word: "addition",
        hint: "The process of combining numbers to find the sum"
    },
    {
        word: "canvas",
        hint: "A heavy, closely woven fabric used as a surface for painting or drawing"
    },
    {
        word: "number",
        hint: "A mathematical value used to count or measure"
    },
    {
        word: "exchange",
        hint: "The act of giving or receiving one thing in return for another"
    },
    {
        word: "dictionary",
        hint: "A reference book containing words listed in alphabetical order, with information about their meanings"
    },
    {
        word: "ambition",
        hint: "A strong desire to achieve something, especially success or power"
    },
    {
        word: "beauty",
        hint: "The combination of qualities that pleases the senses, especially the sight"
    },
    {
        word: "charity",
        hint: "An organization established to help people in need"
    },
    {
        word: "dream",
        hint: "A series of thoughts, images, and sensations occurring in a person's mind during sleep"
    },
    {
        word: "education",
        hint: "The process of acquiring knowledge, skills, values, and attitudes"
    },
    {
        word: "freedom",
        hint: "The condition of being able to act and make decisions without restriction"
    },
    {
        word: "generosity",
        hint: "The quality of being kind and giving to others"
    },
    {
        word: "health",
        hint: "The state of being physically and mentally well and free from disease"
    },
    {
        word: "happiness",
        hint: "A feeling of contentment and joy"
    },
    {
        word: "imagination",
        hint: "The ability to form mental images or concepts of things not present"
    },
    {
        word: "justice",
        hint: "The quality of being fair and impartial"
    },
    {
        word: "kindness",
        hint: "The quality of being warm and friendly, and showing concern for others"
    },
    {
        word: "love",
        hint: "A strong feeling of affection and care for someone"
    },
    {
        word: "music",
        hint: "An art form that uses sound to express emotions and create rhythm and harmony"
    },
    {
        word: "nature",
        hint: "The physical world and all its features, including plants, animals, and landscapes"
    },
    {
        word: "optimism",
        hint: "The belief that good things will happen and that things will turn out well"
    },
    {
        word: "peace",
        hint: "A state of calm and quiet, especially in a political or social context"
    },
    {
        word: "possibility",
        hint: "The chance that something might happen or be true"
    },
    {
        word: "progress",
        hint: "The forward or onward movement towards a destination or goal"
    },
        {
            word: "abrupt",
            hint: "Suddenly stopping or ending"
        },
        {
            word: "accomplish",
            hint: "To finish or complete successfully"
        },
        {
            word: "achievement",
            hint: "Something accomplished successfully"
        },
        {
            word: "acoustic",
            hint: "Relating to sound or the science of sound"
        },
        {
            word: "adore",
            hint: "To love deeply and respect greatly"
        },
        {
            word: "affect",
            hint: "To influence or change something"
        },
        {
            word: "aftermath",
            hint: "The consequences or results of a event"
        },
        {
            word: "aggravate",
            hint: "To make a situation worse"
        },
        {
            word: "allege",
            hint: "To claim or state something as true without proof"
        },
        {
            word: "alliance",
            hint: "A partnership or association between two or more parties"
        },
        {
            word: "alternative",
            hint: "A choice between two or more options"
        },
        {
            word: "ambiguous",
            hint: "Having more than one meaning or interpretation"
        },
        {
            word: "amplify",
            hint: "To make something louder or stronger"
        },
        {
            word: "analogy",
            hint: "A comparison between two similar things"
        },
        {
            word: "analyze",
            hint: "To study or examine in detail"
        },
        {
            word: "anecdote",
            hint: "A short, interesting story"
        },
        {
            word: "anxiety",
            hint: "A feeling of worry, nervousness or unease"
        },
        {
            word: "apathy",
            hint: "Lack of interest or emotion"
        },
        {
            word: "appreciate",
            hint: "To be grateful for and value something"
        },
        {
            word: "approve",
            hint: "To give permission or consent to something"
        },
        {
            word: "arrogance",
            hint: "Excessive pride or confidence in oneself"
        },
        {
            word: "ascend",
            hint: "To move upwards or to a higher position"
        },
        {
            word: "assemble",
            hint: "To bring together or gather a group of things or people"
        },
        {
            word: "assess",
            hint: "To evaluate or judge the value or quality of something"
        },
        {
            word: "asset",
            hint: "Something of value that can be owned or controlled"
        },
        {
            word: "assign",
            hint: "To give a task or responsibility to someone"
        },
        {
            word: "assist",
            hint: "To help or support someone"
        },{
            word: "accommodate",
            hint: "To provide a place for someone or something"
            },
            {
            word: "bicycle",
            hint: "A two-wheeled vehicle propelled by pedals"
            },
            {
            word: "champion",
            hint: "A winner of a competition or tournament"
            },
            {
            word: "delicious",
            hint: "Having a pleasing taste or flavor"
            },
            {
            word: "electronics",
            hint: "The branch of physics and technology concerned with the design of circuits using transistors and microchips"
            },
            {
            word: "fascinate",
            hint: "To hold the attention or interest of someone"
            },
            {
            word: "guitar",
            hint: "A musical instrument with strings that are plucked or strummed"
            },
            {
            word: "hospitality",
            hint: "The friendly and generous reception and entertainment of guests, visitors, or strangers"
            },
            {
            word: "innovation",
            hint: "The introduction of new ideas or methods"
            },
            {
            word: "journalism",
            hint: "The profession of writing or reporting for newspapers or magazines or news programs"
            },
            {
            word: "knowledge",
            hint: "Facts, information, and skills acquired through experience or education"
            },
            {
            word: "leisure",
            hint: "Time free from the demands of work or duty"
            },
            {
            word: "magnificent",
            hint: "Very grand or impressive in appearance or quality"
            },
            {
            word: "navigate",
            hint: "To plan and follow a route in order to reach a destination"
            },
            {
            word: "oasis",
            hint: "A place of refuge, relief, or pleasant change from what is usual, annoying, difficult, or oppressive"
            },
            {
            word: "passion",
            hint: "A strong feeling of emotion or enthusiasm for something"
            },
            {
            word: "quarantine",
            hint: "A state of isolation imposed on people or animals to prevent the spread of disease"
            },
            {
            word: "romantic",
            hint: "Relating to feelings of love and tenderness"
            },
            {
            word: "satisfy",
            hint: "To fulfill the needs, expectations, or desires of someone"
            },
            {
            word: "transportation",
            hint: "The movement of people, goods, or materials from one place to another"
            },
            {
            word: "unforgettable",
            hint: "Impossible to forget or ignore"
            },
            {
            word: "vacation",
            hint: "A period of time during which one is free from work or duty and can relax or travel"
            },
            {
            word: "wonderful",
            hint: "Very pleasing or satisfying"
            },
            {
            word: "xylophone",
            hint: "A musical instrument with wooden bars that are struck with hammers to produce musical tones"
            },
            {
            word: "yellow",
            hint: "A color between green and orange in the visible spectrum"
            },
]
           
    