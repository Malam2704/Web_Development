/* 
Goals:
- Make a Scene with a start up screen where user clicks play
- Another starter screen so the user name is entered
- Make the Score and Level sticky
- Change A and S keys so that holding is increasing speed not press
*/

kaboom({
    global: true,
    fullscreen: true,
    scale: 2,
    debug: true,
    clearColor: [0, 0, 0, 1],
})

const MOVE_SPEED = 120
let CURRENT_MOVE_SPEED = MOVE_SPEED
const JUMP_FORCE = 420
let CURRENT_JUMP_FORCE = JUMP_FORCE
const BIG_JUMP_FORCE = 550
const ENEMY_SPEED = 20
let isJumping = true;
const FALL_DEATH = 400

loadRoot('https://i.imgur.com/')
loadSprite('coin', 'wbKxhcd.png')
loadSprite('evil-shroom', 'KPO3fR9.png')
loadSprite('brick', 'pogC9x5.png')
loadSprite('block', 'M6rwarW.png')
loadSprite('mario', 'Wb1qfhK.png')
loadSprite('mushroom', '0wMd92p.png')
loadSprite('surprise', 'gesQ1KP.png')
loadSprite('unboxed', 'bdrLpi6.png')
loadSprite('pipe-top-left', 'ReTPiWY.png')
loadSprite('pipe-top-right', 'hj2GK4n.png')
loadSprite('pipe-bottom-left', 'c1cYSbt.png')
loadSprite('pipe-bottom-right', 'nqQ79eI.png')

loadSprite('blue-block', 'fVscIbn.png')
loadSprite('blue-brick', '3e5YRQd.png')
loadSprite('blue-steel', 'gqVoI2b.png')
loadSprite('blue-evil-shroom', 'SvV4ueD.png')
loadSprite('blue-surprise', 'RMqCc1G.png')

scene("game", ({ level, score }) => {
    layers(['bg', 'obj', 'ui'], 'obj')

    const maps = [

        [
            '     =   = ===== =   = ===== =   = =   = ===== ====  = =====  =   = ===== ===== = =====',
            '     == == =   = =   = =   = == == == == =     =   = = ==     == == =   = =   = = =   =',
            '     = = = =   = ===== ===== = = = = = = ===== =   =     ==   = = = ===== ===== = =   =',
            '     =   = =   = =   = =   = =   = =   = =     =   =      ==  =   = =   = =  =  = =   =',
            '     =   = ===== =   = =   = =   = =   = ===== =====   =====  =   = =   = =   = = =====',
            '                                                                                       ',
            '                                                                                       ',
            '                                                                                       ',
            '                                                                                       ',
            '     %   =*=%=      p                      }}}}}}                                      ',
            '                                                                                       ',
            '                            -+                                                      -+ ',
            '                    ^   ^   ()                                                      () ',
            '==============================   ======================================================',
            '==============================   ======================================================',
            '==============================   ======================================================',
            '==============================   ======================================================',
            '==============================   ======================================================',
            '==============================   ======================================================',
            '==============================   ======================================================',
            '==============================   ======================================================',
        ],
        [
            '~                                                      ~',
            '~                                                      ~',
            '~                                                      ~',
            '~                                                      ~',
            '~                                                      ~',
            '~     @@@@@@@@@@@                     x                ~',
            '~                                  x  x  x             ~',
            '~                               x  x  x  x  x       -+ ~',
            '~                 z     z    x  x  x  x  x  x x     () ~',
            '!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!',
        ]

    ]

    const levelCfg = {
        width: 20,
        height: 20,
        'p': [sprite('block'), solid()],
        '=': [sprite('block'), solid()],
        '$': [sprite('coin'), 'coin'],
        '%': [sprite('surprise'), solid(), 'coin-surprise'],
        '*': [sprite('surprise'), solid(), 'mushroom-surprise'],
        '}': [sprite('unboxed'), solid()],
        '(': [sprite('pipe-bottom-left'), solid(), scale(0.5)],
        ')': [sprite('pipe-bottom-right'), solid(), scale(0.5)],
        '-': [sprite('pipe-top-left'), solid(), scale(0.5), 'pipe'],
        '+': [sprite('pipe-top-right'), solid(), scale(0.5), 'pipe'],
        '^': [sprite('evil-shroom'), solid(), 'dangerous'],
        '#': [sprite('mushroom'), solid(), 'mushroom', body()],

        '!': [sprite('blue-block'), solid(), scale(0.5)],
        '~': [sprite('blue-brick'), solid(), scale(0.5)],
        'z': [sprite('blue-evil-shroom'), solid(), scale(0.5), 'dangerous'],
        '@': [sprite('blue-surprise'), solid(), scale(0.5), 'coin-surprise'],
        'x': [sprite('blue-steel'), solid(), scale(0.5)],
    }

    const gameLevel = addLevel(maps[level], levelCfg)

    const scoreLabel = add([
        text("Score: " + score),
        pos(0, 16),
        layer('ui'),
        {
            value: score,
        }
    ])

    add([text('Level ' + parseInt(level + 1)), pos(0, 6)])

    function big() {
        let timer = 0
        let isBig = false
        return {
            update() {
                if (isBig) {
                    CURRENT_JUMP_FORCE = BIG_JUMP_FORCE
                    timer -= dt()
                    if (timer <= 0) {
                        this.smallify()
                    }
                }
            },
            isBig() {
                return isBig
            },
            smallify() {
                this.scale = vec2(1)
                CURRENT_JUMP_FORCE = JUMP_FORCE
                timer = 0
                isBig = false
            },
            biggify(time) {
                this.scale = vec2(2)
                timer = time
                isBig = true
            }
        }
    }

    const player = add([
        sprite('mario'), solid(),
        pos(50, 0),
        body(),
        big(),
        origin('bot')
    ])

    action('mushroom', (m) => {
        m.move(20, 0)
    })

    // If I bump on a  surprise block
    player.on("headbump", (obj) => {
        if (obj.is('coin-surprise')) {
            gameLevel.spawn('$', obj.gridPos.sub(0, 1))
            destroy(obj)
            gameLevel.spawn('}', obj.gridPos.sub(0, 0))
        }
        if (obj.is('mushroom-surprise')) {
            gameLevel.spawn('#', obj.gridPos.sub(0, 1))
            destroy(obj)
            gameLevel.spawn('}', obj.gridPos.sub(0, 0))
        }
    })

    // When you touch a shroom, the function biggify() runs
    player.collides('mushroom', (m) => {
        destroy(m)
        player.biggify(6)
    })

    // When you touch a coin your score increases
    player.collides('coin', (c) => {
        destroy(c)
        scoreLabel.value++;
        scoreLabel.text = "Score: " + scoreLabel.value;
    })

    action('dangerous', (d) => {
        d.move(-ENEMY_SPEED, 0)
    })

    player.collides('dangerous', (d) => {
        if (isJumping) {
            destroy(d)
        } else {
            go('lose', { score: scoreLabel.value })
        }
    })

    // Placed into the play.action below
    // player.action(() => {
    //     camPos(player.pos.x + 100, player.pos.y - 100)
    //     if (player.pos.y >= FALL_DEATH) {
    //         go('lose', { score: scoreLabel.value })
    //     }
    // })

    player.collides('pipe', () => {
        keyPress('down', () => {
            go('game', {
                level: (level + 1) % maps.length,
                score: scoreLabel.value
            })
        })
    })

    keyPress('a', () => {
        CURRENT_MOVE_SPEED = MOVE_SPEED * 2
    })
    keyRelease('a', () => {
        CURRENT_MOVE_SPEED = MOVE_SPEED
    })

    keyDown('left', () => {
        player.move(-CURRENT_MOVE_SPEED, 0)
    })

    keyDown('right', () => {
        player.move(CURRENT_MOVE_SPEED, 0)
    })

    player.action(() => {
        camPos(player.pos.x + 100, player.pos.y - 100)
        if (player.pos.y >= FALL_DEATH) {
            go('lose', { score: scoreLabel.value })
        }
        if (player.grounded()) {
            isJumping = false
        }
    })

    keyPress('space', () => {
        if (player.grounded()) {
            isJumping = true
            player.jump(CURRENT_JUMP_FORCE)
        }
    })
});

scene('lose', ({ score }) => {
    add([text(score, 32), origin('center'), pos(width() / 2, height() / 2)])
})

start("game", { level: 0, score: 0 })